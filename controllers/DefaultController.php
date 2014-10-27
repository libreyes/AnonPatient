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

namespace OEModule\AnonPatient\controllers;

class DefaultController extends \BaseController
{
	public function accessRules()
	{
		return array(array('allow', 'users' => array('@')));
	}

	public function actionSearch()
	{
		$error = null;

		if (isset($_POST['uuid'])) {
			$uuid = $_POST['uuid'];

			if (preg_match('/[\dA-F]{8}-[\dA-F]{4}-[\dA-F]{4}-[\dA-F]{4}-[\dA-F]{8}/', $uuid)) {
				$crit = new \CDbCriteria;
				$crit->compare('hos_num', $uuid);

				if (($patient = \Patient::model()->find($crit))) {
					$episodes = $patient->episodes;

					if (count($episodes) == 1) {
						$route = array('/patient/episode', 'id' => $episodes[0]->id);
					} else {
						$route = array('/patient/view', 'id' => $patient->id);
					}

					$this->redirect($route);
				} else {
					$error = 'Patient not found.';
				}
			} else {
				$error = 'Please enter a valid UUID.';
			}
		} else {
			$uuid = null;
		}

		$this->render('search', array('uuid' => $uuid, 'error' => $error));
	}
}
