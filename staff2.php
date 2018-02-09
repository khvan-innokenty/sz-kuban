<?php include "header.php"; ?>
    <div class="content">
        <div class="container">
            <ul class="breadcrumbs"><li><a href="/">Главная</a></li><li><a href="/staff.php">Специалисты</a></li><li>Константинопольский Константин Константинович</li></ul>

            <h1 class="staff__name">Константинопольский Константин Константинович</h1>
            <div class="staff__position">Заведующий</div>

            <div class="profile">
                <div class="profile__photo">
                    <div class="imgwrp">
                        <img src="http://via.placeholder.com/380x456?text=DOC+FULL">
                    </div>
                </div>
                <div class="profile__body">
                    <img class="profile__avatar" src="http://via.placeholder.com/250x300?text=DOC">

                    <h3>Ученая степень, ученое звание</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    <h3>Квалификация</h3>
                    <p>Высшая</p>
                    <h3>Направление работы</h3>
                    <p>Lorem ipsum</p>
                    <h3>Дополнительное образование</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, </p>
                    <h3>Отделения</h3>
                    <p><a href="/departments2.php">Терапия</a>, <a href="./departments2.php">Кардиология</a></p>
                </div>
                <div class="profile__form">
                    <form class="appointment js-form" action="/ajax/appointment.php" data-success="Администратор скоро свяжется с Вами для записи на приём." id="staff-appointment-form">
                        <input type="hidden" name="target" value="Страница Константинопольский Константин Константинович">
                        <input name="name" type="text" placeholder="Ф.И.О.">
                        <input name="phone" type="tel" placeholder="Телефон">
                        <input type="checkbox" class="appointment__checkbox" name="legal" id="legal-staff">
                        <label for="legal-staff" class="appointment__checkbox__label">Я даю согласие на обработку персональных данных, с условиями <a href="/legal.php" target="_blank">Политики обработки и защиты персональных данных</a> ознакомлен.</label>
                        <button class="button appointment__submit" type="submit" disabled><span class="text">Записаться на приём</span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>


<?php include "footer.php";