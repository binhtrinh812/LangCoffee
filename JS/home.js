let next = document.querySelector('.gallery .next');
let prev = document.querySelector('.gallery .prev');

next.addEventListener('click', function() {
    let items = document.querySelectorAll('.gallery .slide .item');
    document.querySelector('.gallery .slide').appendChild(items[0]);
});

prev.addEventListener('click', function() {
    let items = document.querySelectorAll('.gallery .slide .item');
    document.querySelector('.gallery .slide').prepend(items[items.length - 1]);
});