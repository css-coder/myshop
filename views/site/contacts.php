<?php include ROOT . '/views/layouts/header.php'; ?>

    <section>
        <div class="container">
            <div class="row">

                <div class="col-sm-4 col-sm-offset-4 padding-right">

					<?php if ($result) { ?>
                        <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
					<?php } else { ?>
						<?php if (isset($errors) && is_array($errors)) { ?>
                            <ul>
								<?php foreach ($errors as $error) { ?>
                                    <li> - <?php echo $error; ?></li>
								<?php } ?>
                            </ul>
						<?php } ?>

                        <div class="signup-form"><!--sign up form-->
                            <h2>Обратная связь</h2>
                            <h5>Есть вопрос? Напишите нам</h5>
                            <br/>
                            <form action="#" method="post">
                                <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                                <input type="text" name="userSubject" placeholder="Тема письма" value="<?php echo $userSubject; ?>"/>
                                <textarea name="userText" rows="5" placeholder="Сообщение" value="<?php echo $userText; ?>"/></textarea>
                                <br/><br/>
                                <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                            </form>
                        </div><!--/sign up form-->
					<?php } ?>


                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    </section>

<?php include ROOT . '/views/layouts/footer.php'; ?>