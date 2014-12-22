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
<h1 class="badge">Add Patient</h1>
<div class="row">
	<div class="box content large-4 large-centered column">
		<?= CHtml::beginForm(); ?>
			<div class="row">
				<div class="large-6 column"><label for="gender">Gender:</label></div>
				<div class="large-6 column"><?= CHtml::dropdownList("gender", null, array("" => "-- Select --", "F" => "Female", "M" => "Male", "O" => "Other")) ?></div>
		<?= CHtml::endForm(); ?>
	</div>
</div>
