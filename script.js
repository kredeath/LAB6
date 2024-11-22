// Знаходимо елементи на сторінці
const changeColorBtn = document.getElementById('change-color-btn');
const welcomeText = document.getElementById('welcome-text');

// Зміна кольору фону секції "Головна" при натисканні кнопки
changeColorBtn.addEventListener('click', () => {
    document.body.style.backgroundColor =
        document.body.style.backgroundColor === 'lightblue' ? 'white' : 'lightblue';
});

// Зміна тексту при наведенні курсора на текст привітання
welcomeText.addEventListener('mouseover', () => {
    welcomeText.textContent = 'Дякуємо за вашу увагу!';
});

welcomeText.addEventListener('mouseout', () => {
    welcomeText.textContent = 'Ласкаво просимо до нашого каталогу товарів!';
});
