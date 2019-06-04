			<div class="row column">
				<p class="heading">
					Вопрос-ответ
				</p>
				<? foreach($arr as $key => $val): ?>
				<div class="question">
					<p class="client-name">
						<?= $val['QUEST_NAME'] ?>
					</p>
					<p class="public-date">
						<?= $val['QUEST_DATE'] ?>
					</p>
					<p class="client-message">
						<?= $val['QUEST_TEXT'] ?>
					</p>
					<p class="answer">
						<?= $val['ANS_TEXT'] ?>
					</p>
				</div>
				<? endforeach ?>
			</div>
			<div class="form">
				<p class="title">
					Задайте нам вопрос
				</p>
				<form class="message-form" method="post">
					<p>
						<input type="text" name="name" placeholder="Ф.И.О." required>
						<input type="text" name="email" placeholder="E-mail" required>
						<input type="text" name="phone" placeholder="Телефон" required>
						<input type="text" name="subject" placeholder="Тема">
					</p>
					<textarea name="text" placeholder="Сообщение" required></textarea>
					<input type="submit" value="Отправить">
				</form>
			</div>