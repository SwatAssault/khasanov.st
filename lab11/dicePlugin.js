var settings = {
    requiredWins: 3,
    currentRound: 1,
    rolls: 1,
    playerScore: 0,
    computerScore: 0,
    wins: 0,
    loses: 0
};

var resultStrings = ["Вы выиграли этот раунд", "Вы проиграли этот раунд", "Ничья"];

(function($){
      
    $.fn.Dice = function() {

        this.css("position", "relative").css("margin-right", "auto").css("margin-left", "auto").css("height", "400px").css("width", "300px").css("border", "3px solid black");
        $('<h1 />', {
            text: 'Roll The Dice',
            style: 'text-align: center' 
        }).appendTo(this);
        $('<p />', {
            text: 'Powered by Dice plugin',
            style: 'text-align: center' 
        }).appendTo(this);
        $('<hr />').appendTo(this);

        $('<p />', {
            id: "roundsSetting",
            text: 'Количество раундов до победы в игре: 3',
            style: 'text-align: center' 
        }).appendTo(this);
        var buttonsWrapper = $("<p />").appendTo(this);
        buttonsWrapper.append('<button id="minus" class="ui-button ui-widget ui-corner-all" onclick="reqRoundsMinus();">-</button>');
        buttonsWrapper.append('<button id="plus" class="ui-button ui-widget ui-corner-all" onclick="reqRoundsPlus();">+</button>');
        $("#minus").css("margin-left", "110px");

        $('<h4 />', {
            id: "wins",
            text: 'Побед: 0',
            style: 'text-align: center' 
        }).appendTo(this);

        $('<h4 />', {
            id: "loses",
            text: 'Поражений: 0',
            style: 'text-align: center' 
        }).appendTo(this);

        this.append('<button id="roll" class="ui-button ui-widget ui-corner-all" onclick="rollTheDice();">New Game</button>');
        $("#roll").css("margin-left", "90px").css("margin-top", "30px").css("height", "60px").css("width", "120px");

        var roundEnd = $('<div />', {
            id: "tossResult",
            title: "Результаты раунда 1", 
            style: 'text-align: center' 
        }).appendTo(this);

        roundEnd.dialog({
            autoOpen: false,
            show: {
                effect: "drop",
                duration: 500
            },
            hide: {
                effect: "drop",
                duration: 500
            }
        });

    }; 

})(jQuery);

function rollTheDice(){
    var playerResult = toss();
    var computerResult = toss();

    $(".dice").remove();
    $(".resultInfo").remove();

    $("<p />", {
        text: "Игра до " + settings.requiredWins + " побед",
        class: "resultInfo"
    }).appendTo($("#tossResult"));

    $("<hr />", {
        class: "resultInfo"
    }).appendTo($("#tossResult"));

    var wrapper = $('<div />', {
        class: "resultInfo", 
        style: "display: flex"
    }).appendTo($("#tossResult"));

    var left = $('<div />', {
        id: "left",
        style: 'margin-right: 10px' 
    }).appendTo(wrapper);    

    var right = $('<div />', {
        id: "right",
        style: 'margin-left: 10px'
    }).appendTo(wrapper);

    $("<p />", {
        text: "Ваш бросок",
        class: "resultInfo"
    }).appendTo(left);

    $("<p />", {
        text: "Бросок компьютера",
        class: "resultInfo"
    }).appendTo(right);

    var playerDicePic = $('<img />', { 
        class: 'dice',
        src: 'images/dice' + playerResult + '.png',
        alt: 'нет'
    }).appendTo(left);

    var computerDicePic = $('<img />', { 
        class: 'dice',
        src: 'images/dice' + computerResult + '.png',
        alt: 'нет'
    }).appendTo(right);

    $("<hr />", {
        class: "resultInfo"
    }).appendTo($("#tossResult"));

    // 0 - win, 1 - lose, 2 - draw
    var result = playerResult > computerResult ? 0 : playerResult < computerResult ? 1 : 2;
    var resultStr = resultStrings[result];

    $("#tossResult").dialog('option', 'title', "Результаты раунда " + settings.currentRound);
    settings.currentRound += 1;
    if (result === 0) {
        settings.playerScore += 1;
    } else if (result === 1) {
        settings.computerScore += 1;
    }

    $("<h4 />", {
        class: "resultInfo",
        text: resultStr
    }).appendTo($("#tossResult"));

    $("<h4 />", {
        class: "resultInfo",
        text: "Счет: " + settings.playerScore + "-" + settings.computerScore
    }).appendTo($("#tossResult"));

    var enableSurrender;

    var winString;
    if (settings.playerScore === settings.requiredWins) { // win
        enableSurrender = false;
        winString = "Вы выиграли игру";
        endgame(true);
    } else if (settings.computerScore === settings.requiredWins) {
        enableSurrender = false;
        winString = "Вы проиграли игру";
        endgame(false);
    } else {
        enableSurrender = true;
        winString = "Игра продолжается";
        $("#roll").html("Roll");
    }

    $("<h4 />", {
        id: "resultStr",
        class: "resultInfo",
        text: winString
    }).appendTo($("#tossResult"));

    $("#resultStr").after('<button id="continue" class="resultInfo ui-button ui-widget ui-corner-all" onclick="closeDialog();">Продолжить</button>');

    if (enableSurrender) {
        $("#continue").after('<button id="surrender" class="resultInfo ui-button ui-widget ui-corner-all" onclick="surrender();">Сдаться</button>');
    }
    
    $("#tossResult").dialog("open");
}

function endgame(isWin) {
    if (isWin) {
        settings.wins += 1;
        $("#wins").text("Побед: " + settings.wins);
        
    } else {
        settings.loses += 1;
        $("#loses").text("Поражений: " + settings.loses);
    }
    settings.playerScore = 0;
    settings.computerScore = 0;
    settings.currentRound = 1;
    $("#roll").html("New Game");
}

function reqRoundsPlus() {
    settings.requiredWins += 1;
    $("#roundsSetting").text("Количество раундов до победы в игре: " + settings.requiredWins);
}

function reqRoundsMinus() {
    if (settings.requiredWins > 1) {
        settings.requiredWins -= 1;
        $("#roundsSetting").text("Количество раундов до победы в игре: " + settings.requiredWins);
    }
}

function closeDialog() {
    $("#tossResult").dialog("close");
}

function surrender() {
    $("#tossResult").dialog("close");
    endgame(false);
}

function toss() {
    return Math.round(1 - 0.5 + Math.random() * (6 - 1 + 1));
}