<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li><a href="/vacancies.php">Вакансии</a></li><li>Анкета соискателя</li></ul>

            <h1>Анкета соискателя</h1>

            <p>Заполните анкету, мы свяжемся с Вами. Все поля обязательны для заполнения.</p>

            <form class="resume js-form" action="/ajax/vacancy.php">
                <label for="resume-vacancy">Интересующая вакансия</label>
                <select id="resume-vacancy" name="vacancy" required>
                    <option value="Специалист по развитию информационных систем (https://hh.ru/vacancy/24078272)">Специалист по развитию информационных систем</option>
                    <option value="Специалист по развитию информационных систем (https://hh.ru/vacancy/24078272)">Специалист по развитию информационных систем</option>
                    <option value="Специалист по развитию информационных систем (https://hh.ru/vacancy/24078272)">Специалист по развитию информационных систем</option>
                </select>
                <label for="resume-occupation">Планируемая занятость</label>
                <select id="resume-occupation" name="occupation" required>
                    <option value="Полная занятость">Полная занятость</option>
                    <option value="Частичная занятость">Частичная занятость</option>
                    <option value="Ваши пожелания">Ваши пожелания</option>
                </select>
                <label for="resume-timetable">Желаемый график работы</label>
                <select id="resume-timetable" name="timetable" required>
                    <option value="Полная занятость">8-и часовой рабочий день</option>
                    <option value="Частичная занятость">Сменный график</option>
                    <option value="Ваши пожелания">Ваши пожелания</option>
                </select>
                <label for="resume-education">Образование</label>
                <select name="resume-education" id="education" required>
                    <option>Высшее</option>
                    <option>Неоконченное высшее</option>
                    <option>Среднее</option>
                    <option>Среднее специальное</option>
                </select>
                <label for="resume-comments">Последние 3 места работы, Ваши пожелания</label>
                <textarea id="resume-comments" class="tall" required></textarea>
                <label for="resume-name">ФИО</label>
                <input type="text" id="resume-name" name="name" required>
                <label for="resume-phone">Телефон</label>
                <input type="tel" id="resume-phone" name="phone" required>
                <label for="resume-email">Email</label>
                <input type="email" id="resume-email" name="email" required>
                <label for="resume-birthday" >Дата рождения</label>
                <input type="date" id="resume-birthday" name="birthday" required>

                <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-resume">
                <label for="legal-resume" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>

                <button class="button appointment__submit" type="submit" disabled><span class="text">Отправить анкету</span></button>
            </form>

        </div>
    </div>


<?php include "footer.php";