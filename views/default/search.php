<?php
/**
 * (C) OpenEyes Foundation, 2014
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (C) 2014, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>
<?php $this->renderPartial('//site/search_header'); ?>
<div class="row">
	<div class="large-8 large-centered column">
		<?php $this->renderPartial('//base/_messages'); ?>
		<?= CHtml::beginForm('', 'POST', array('class' => 'panel')) ?>
			<div class="row">
				<div class="large-9 column"><?= CHtml::textField('uuid', $uuid, array('class' => 'large', 'placeholder' => 'Enter UUID...')); ?></div>
				<div class="large-3 column text-right"><button type="submit" class="primary long">Search</button></div>
			</div>
		<?= CHtml::endForm() ?>
		<?php if ($error): ?>
			<div class="alert-box warning"><?= CHtml::encode($error) ?></div>
		<?php endif ?>
	</div>
</div>
