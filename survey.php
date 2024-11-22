<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета: Інформаційні технології</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <h1 class="title">Анкета</h1>
        <nav class="navigation">
            <ul>
                <li><a href="index.html">Головна</a></li>
                <li><a href="survey.php">Анкета</a></li>
            </ul>
        </nav>
    </header>

    <section class="section">
        <h2>Ваше ставлення до інформаційних технологій</h2>
        <form action="save_survey.php" method="POST">
            <label>1. Яка ваша основна роль у сфері ІТ?</label><br>
            <input type="radio" name="role" value="Розробник" required> Розробник<br>
            <input type="radio" name="role" value="Тестер"> Тестер<br>
            <input type="radio" name="role" value="Аналітик"> Аналітик<br>
            <input type="radio" name="role" value="Адміністратор"> Адміністратор<br>
            <input type="radio" name="role" value="Інше"> Інше<br><br>

            <label>2. Який ваш улюблений інструмент або технологія?</label><br>
            <input type="radio" name="tool" value="JavaScript" required> JavaScript<br>
            <input type="radio" name="tool" value="Python"> Python<br>
            <input type="radio" name="tool" value="Java"> Java<br>
            <input type="radio" name="tool" value="C#"> C#<br>
            <input type="radio" name="tool" value="Інше"> Інше<br><br>

            <label>3. Яка операційна система для роботи вам подобається найбільше?</label><br>
            <input type="radio" name="os" value="Windows" required> Windows<br>
            <input type="radio" name="os" value="macOS"> macOS<br>
            <input type="radio" name="os" value="Linux"> Linux<br>
            <input type="radio" name="os" value="Інше"> Інше<br><br>

            <label>4. Як ви оцінюєте свої знання у сфері ІТ?</label><br>
            <input type="radio" name="level" value="Початківець" required> Початківець<br>
            <input type="radio" name="level" value="Любитель"> Любитель<br>
            <input type="radio" name="level" value="Професіонал"> Професіонал<br>
            <input type="radio" name="level" value="Експерт"> Експерт<br><br>

            <label>5. Яка галузь ІТ вас цікавить найбільше?</label><br>
            <input type="radio" name="field" value="Розробка ПЗ" required> Розробка програмного забезпечення<br>
            <input type="radio" name="field" value="Мережі та кібербезпека"> Мережі та кібербезпека<br>
            <input type="radio" name="field" value="Аналіз даних"> Аналіз даних<br>
            <input type="radio" name="field" value="Штучний інтелект"> Штучний інтелект<br>
            <input type="radio" name="field" value="Інше"> Інше<br><br>

            <button type="submit">Відправити</button>
        </form>
    </section>
</body>
</html>
