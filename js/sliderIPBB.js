/* этот код помечает картинки, для удобства разработки */
let k = 1;
for(let li of carousell.querySelectorAll('li')) {
    li.style.position = 'relative';
    li.insertAdjacentHTML('beforeend', `<span style="position:absolute;left:0;top:0">${k}</span>`);
    k++;
}

/* конфигурация */
let widthh = 700; // ширина картинки
let countt = 1.5; // видимое количество изображений

let listt = carousell.querySelector('ul');
let listElemss = carousell.querySelectorAll('li');

let positionn = 10; // положение ленты прокрутки

carousell.querySelector('.prevv').onclick = function() {
    // сдвиг влево
    positionn += widthh * countt;
    // последнее передвижение влево может быть не на 3, а на 2 или 1 элемент
    positionn = Math.min(positionn, 0)
    listt.style.marginLeft = positionn + 'px';
};

carousell.querySelector('.nextt').onclick = function() {
    // сдвиг вправо
    positionn -= widthh * countt;
    // последнее передвижение вправо может быть не на 3, а на 2 или 1 элемент
    positionn = Math.max(positionn, -widthh * (listElemss.length - countt));
    listt.style.marginLeft = positionn + 'px';
};