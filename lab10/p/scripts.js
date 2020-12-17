var names = ["Eric", "Jessica", "John", "Mike", "Melissa", "Jacob", "Frederick", "Anna", "Anabell", "Silvanna", "Boris", "Juan"];

var origins = ["Порядочный гражданин", "Разбойник", "Бывший убийца", "Высшая кровь", "Своя история"];

var difficultyLevels = ["Легкий. Вам прощаются все ошибки", "Средний. Враги будут давать Вам отпор, но это не помешает насладиться историей",
"Сложный. Враги намного сильнее, но у Вас есть шансы", "Очень сложный. У всех врагов несправедливое преимущество, игра не прощает ошибок"];

var cities = ["Уфа", "Москва", "Лордерон", "Санкт-Петербург", "Берлин", "Париж"];

var character = {};

function setName(name) {
    character["name"] = name;
}

function setPetName(pet) {
    character["petName"] = pet.value;
}

function setOrigin(num) {
    character["origin"] = origins[num];
}

function getOrigin(number) {
    return origins[number];
}

function getRandomName() {
    return names[Math.floor(Math.random() * names.length)];
}

function getDifficultyLevel(number) {
    return difficultyLevels[number];
}

