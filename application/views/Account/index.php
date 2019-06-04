<div class="row column account">
	<div class="buttons">
		<!-- <button id="personal-info" class="button-active" type="button">Личная информация</button> -->
		<button id="payers-list" class="button-active" type="button">Список пайщиков</button>
		<a class="exit" href="/account/logout" type="button">Выход</a>
	</div>
	<div class="payers">
		<table class="graff acc-table">
			<thead>
				<tr>
					<td>№</td>
					<td>Ф.И.О.</td>
					<td>Сумма</td>
					<td>Статус</td>
				</tr>
			</thead>
			<tbody>
				<? $i = 0 ?>
				<? foreach($arr as $key => $val): ?>
				<? $i++ ?>
				<tr>
					<td><?= $i ?></td>
					<td><?= $val['NAME'] ?></td>
					<td><?= $val['PAY_SUM'] ?></td>
					<td><?= $val['STATUS'] ?></td>
				</tr>
				<? endforeach; ?>
			</tbody>
		</table>
	</div>
</div>