<div class="row column img">
	<p class="heading">
		Онлайн калькулятор
	</p>
	<p class="text-content">
		Воспользуйтесь нашим онлайн калькулятором и выберите для себя наиболее выгодные условия
	</p>
	<form class="calculator">
		<i class="calc-message"><?= $mainMessage ?></i>
		<div class="fields">
			<p>
				<span>Срок выделения средств (мес): <i class="calc-message"><?= $durationMessage ?></i></span>
				<input name="duration" type="number" placeholder="от 1 до 180" value="<?= $duration ?>" required>
			</p>
			<p>
				<span>Стоимость объекта (тг): <i class="calc-message"><?= $costMessage ?></i></span>
				<input name="cost" type="number" placeholder="от 3 000 000" value="<?= $cost ?>" required>
			</p>
			<p>
				<span>Первоначальный взнос (%): <i class="calc-message"><?= $nominalMessage ?></i></span>
				<input name="nominal" type="number" placeholder="от 28" value="<?= $nominalPercent ?>" required>
			</p>
			<p>
				<span>Переплата за весь срок (тг): </span><span class="overpayment"><?= $overPayment.' тг' ?></span>
			</p>
		</div>
		<input type="submit" value="Расчитать">
	</form>
	<div class="table-wrapper">
		<table class="graff">
			<thead>
				<tr>
					<td>Месяц</td>
					<td>Стоимость недвижимости</td>
					<td>Вступительный взнос</td>
					<td>Первоначальный паевой взнос</td>
					<td>Ежемесячный паевой взнос</td>
					<td>Членский взнос <br>(2 МРП)</td>
					<td>Остаток паевого взноса</td>
					<td>Ежемесячный платеж</td>
				</tr>
			</thead>
			<tbody>
				<? for($i = 1; $i <= $duration; $i ++): ?>
				<? 
					if($i%12 == 0) $class = 'year'; 
					else $class = '';
				?>
				<tr class="<?= $class ?>">
					<td><?= $i ?></td>
					<? if($i == 1): ?>
					<td><?= $cost ?></td>
					<td><?= $entrancePayment ?></td>
					<td><?= $nominalPayment ?></td>
					<? else: ?>
					<td></td>
					<td></td>
					<td></td>
					<? endif ?>
					<td><?= $monthSharePayment ?></td>
					<td><?= $memberPayment ?></td>
					<td><?= $preRemainSharePayment - ($monthSharePayment * $i) ?></td>
					<td><?= $monthPayment ?></td>
				</tr>
				<? endfor ?>
				<tr>
					<td></td>
					<td>Итого переплата</td>
					<td><?= $entrancePayment ?></td>
					<td></td>
					<td></td>
					<td><?= $remain ?></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>