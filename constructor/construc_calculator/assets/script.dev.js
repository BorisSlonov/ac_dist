$(function() {
	/* calc */
		var
			calc___workCosts = {
				chand: 400, /* Цена за 1 шт. люстру */
				pot: 300, /* Цена за 1 шт. светильник */
				pipe: 250, /* За 1 шт. трубу */
				angle: 70, /* За 1 шт. угол начиная с 5 */
				insert: 50, /* За 1 м.п. вставку начиная */
				print: 1200, /* За 1 м.п. фотопечать */
				curve: 700 /* За 1 м.п. криволинейность начиная с 5 */
			},
			calc___manufacturesArr = [
				{
					name: 'MSD Премиум: Китай',
					descHTML: '<h1>Характеристики MSD Премиум: Китай</h1><ul><li>Тисненая многослойная пленка согласно RAL GZ 716/1 для покрытия подложек для внутреннего и наружного применения при вертикальном монтаже элементов.</li> <li>Тисненая многослойная пленка согласно RAL GZ 716/1 для покрытия подложек для внутреннего и наружного применения при вертикальном монтаже элементов.</li> <li>Тисненая многослойная пленка согласно RAL GZ 716/1 для покрытия подложек для внутреннего и наружного применения при вертикальном монтаже элементов.</li> </ul>',
					value: 1,
					materials: [
						{
							name: 'ПВХ: Белый',
							descHTML: '',
							costs: {
								1: 3600,
								2: 1850,
								3: 1250,
								4: 1000,
								5: 890,
								6: 790,
								7: 780,
								8: 740,
								9: 690,
								10: 650,
								11: 630,
								12: 610,
								13: 600,
								14: 590,
								15: 580,
								18: 570,
								19: 560,
								29: 550
							}
						}, {
							name: 'ПВХ: Цветной ',
							descHTML: '',
							costs: {
								1:  3520,
								2:  1760,
								3:  1170,
								4:  880,
								5:  760,
								6:  650,
								7:  640,
								8:  600,
								9:  540,
								10: 500,
								11: 470,
								12: 450,
								13: 420,
								14: 410,
								15: 400,
								18: 390,
								19: 380,
								29: 370,
								30: 360
							}
						}
					]
				}, {
					name: 'Renolit: Германия',
					descHTML: '<h1>Характеристики Renolit: Германия</h1><p>Характеристики</p>',
					value: 2,
					materials: [
						{
							name: 'ПВХ: Белый ',
							descHTML: '',
							costs: {
								1:   3750,
								2:   1870,
								3:   1270,
								4:   990,
								5:   820,
								6:   710,
								7:   700,
								8:   650,
								9:   600,
								10:  550,
								11:  530,
								12:  510,
								13:  480,
								14:  470,
								15:  460,
								18:  440,
								19:  430,
								29:  420
							}
						}, {
							name: 'ПВХ: Цветной',
							descHTML: '',
							costs: {
								1:   3750,
								2:   1870,
								3:   1270,
								4:   990,
								5:   820,
								6:   710,
								7:   700,
								8:   650,
								9:   600,
								10:  550,
								11:  530,
								12:  510,
								13:  480,
								14:  470,
								15:  460,
								18:  440,
								19:  430,
								29:  420
							}
						}
					]
				}, {
					name: 'CTN: Франция',
					descHTML: '<h1>Характеристики CTN: Франция</h1><p>Характеристики</p>',
					value: 3,
					materials: [
						{
							name: 'ПВХ: Белый',
							descHTML: '',
							costs: {
								1: 3600,
								2: 1850,
								3: 1250,
								4: 1000,
								5: 890,
								6: 790,
								7: 780,
								8: 740,
								9: 690,
								10: 650,
								11: 630,
								12: 610,
								13: 600,
								14: 590,
								15: 580,
								18: 570,
								19: 560,
								29: 550
							}
						}, {
							name: 'ПВХ: Цветной',
							descHTML: '',
							costs: {
								1: 3600,
								2: 1850,
								3: 1250,
								4: 1000,
								5: 890,
								6: 790,
								7: 780,
								8: 740,
								9: 690,
								10: 650,
								11: 630,
								12: 610,
								13: 600,
								14: 590,
								15: 580,
								18: 570,
								19: 560,
								29: 550
							}
						}
					]
				}
			];
		var
			calc___baseWrapper = $('#viz-calc');
		var
			calc___inp_manufacture = calc___baseWrapper.find('.viz-calc___inp._isManufacture'),
			calc___inp_material = calc___baseWrapper.find('.viz-calc___inp._isMaterial'),
			calc___inp_qtyArea = calc___baseWrapper.find('.viz-calc___inp._isQtyArea'),
			calc___inp_color = calc___baseWrapper.find('.viz-calc___inp._isColor'),
			calc___inp_qtyChand = calc___baseWrapper.find('.viz-calc___inp._isQtyChand'),
			calc___inp_qtyPot = calc___baseWrapper.find('.viz-calc___inp._isQtyPot'),
			calc___inp_qtyPipe = calc___baseWrapper.find('.viz-calc___inp._isQtyPipe'),
			calc___inp_qtyAngle = calc___baseWrapper.find('.viz-calc___inp._isQtyAngle'),
			calc___inp_qtyInsert = calc___baseWrapper.find('.viz-calc___inp._isQtyInsert'),
			calc___inp_qtyPrint = calc___baseWrapper.find('.viz-calc___inp._isQtyPrint'),
			calc___inp_qtyCurve = calc___baseWrapper.find('.viz-calc___inp._isQtyCurve'),
			calc___inp_measure = calc___baseWrapper.find('.viz-calc___inp._isMeasure'),
			calc___inp_contract = calc___baseWrapper.find('.viz-calc___inp._isContract'),
			calc___inp_name = calc___baseWrapper.find('.viz-calc___inp._isName'),
			calc___inp_phone = calc___baseWrapper.find('.viz-calc___inp._isPhone');
		var
			calc___desc_manufacture = calc___baseWrapper.find('.viz-calc__descManufacture'),
			calc___desc_material = calc___baseWrapper.find('.viz-calc__descMaterial'),
			calc___st_manufacture = calc___baseWrapper.find('.viz-calc___st._isManufacture'),
			calc___st_material = calc___baseWrapper.find('.viz-calc___st._isMaterial'),
			calc___st_qtyArea = calc___baseWrapper.find('.viz-calc___st._isQtyArea'),
			calc___st_costArea = calc___baseWrapper.find('.viz-calc___st._isCostArea'),
			calc___st_color = calc___baseWrapper.find('.viz-calc___st._isColor'),
			calc___st_qtyChand = calc___baseWrapper.find('.viz-calc___st._isQtyChand'),
			calc___st_costChand = calc___baseWrapper.find('.viz-calc___st._isCostChand'),
			calc___st_qtyPot = calc___baseWrapper.find('.viz-calc___st._isQtyPot'),
			calc___st_costPot = calc___baseWrapper.find('.viz-calc___st._isCostPot'),
			calc___st_qtyPipe = calc___baseWrapper.find('.viz-calc___st._isQtyPipe'),
			calc___st_costPipe = calc___baseWrapper.find('.viz-calc___st._isCostPipe'),
			calc___st_qtyAngle = calc___baseWrapper.find('.viz-calc___st._isQtyAngle'),
			calc___st_costAngle = calc___baseWrapper.find('.viz-calc___st._isCostAngle'),
			calc___st_qtyInsert = calc___baseWrapper.find('.viz-calc___st._isQtyInsert'),
			calc___st_costInsert = calc___baseWrapper.find('.viz-calc___st._isCostInsert'),
			calc___st_qtyPrint = calc___baseWrapper.find('.viz-calc___st._isQtyPrint'),
			calc___st_costPrint = calc___baseWrapper.find('.viz-calc___st._isCostPrint'),
			calc___st_qtyCurve = calc___baseWrapper.find('.viz-calc___st._isQtyCurve'),
			calc___st_costCurve = calc___baseWrapper.find('.viz-calc___st._isCostCurve'),
			calc___st_costTotal = calc___baseWrapper.find('.viz-calc___st._isCostTotal');
		var
			calc___sec_manufactureName,
			calc___sec_materialName;
		var
			calc___resolveMaterialCost = function (qtyArea) {
				var resolvedCost;
				$.each(calc___manufacturesArr[calc___inp_manufacture.val()].materials[calc___inp_material.val()].costs, function(fromQtyArea, cost) {
					if (typeof(resolvedCost) == 'undefined') {
						resolvedCost = cost;
					}
					if (qtyArea >= fromQtyArea) {
						resolvedCost = cost;
					}
				})
				return resolvedCost;
			},
			calc___getAllData = function() {
				var
					qtyArea = ((calc___inp_qtyArea.inputmask('unmaskedvalue') * 1).toFixed(2) * 1),
					costArea = Math.ceil(qtyArea * calc___resolveMaterialCost(qtyArea)),
					color = calc___inp_color.val(),
					qtyChand = ((calc___inp_qtyChand.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costChand = Math.ceil(qtyChand * calc___workCosts.chand),
					qtyPot = ((calc___inp_qtyPot.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costPot = Math.ceil(qtyPot * calc___workCosts.pot),
					qtyPipe = ((calc___inp_qtyPipe.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costPipe = Math.ceil(qtyPipe * calc___workCosts.pipe),
					qtyAngle = ((calc___inp_qtyAngle.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costAngle = Math.ceil(Math.max(0, qtyAngle - 4) * calc___workCosts.angle),
					qtyInsert = ((calc___inp_qtyInsert.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costInsert = Math.ceil(qtyInsert * calc___workCosts.insert),
					qtyPrint = ((calc___inp_qtyPrint.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costPrint = Math.ceil(qtyPrint * calc___workCosts.print),
					qtyCurve = ((calc___inp_qtyCurve.inputmask('unmaskedvalue') * 1).toFixed() * 1),
					costCurve = Math.ceil(Math.max(0, qtyCurve - 4) * calc___workCosts.curve),
					costTotal = (costArea + costChand + costPot + costPipe + costAngle + costInsert + costPrint + costCurve),
					measure = calc___inp_measure.prop('checked') * 1,
					contract = calc___inp_contract.prop('checked') * 1,
					name = calc___inp_name.val(),
					phone = calc___inp_phone.inputmask('unmaskedvalue');
				return {
					manufactureName: calc___sec_manufactureName,
					materialName: calc___sec_materialName,
					qtyArea: qtyArea.toFixed(2),
					costArea: costArea.toFixed(),
					color: color,
					qtyChand: qtyChand.toFixed(),
					costChand: costChand.toFixed(),
					qtyPot: qtyPot.toFixed(),
					costPot: costPot.toFixed(),
					qtyPipe: qtyPipe.toFixed(),
					costPipe: costPipe.toFixed(),
					qtyAngle: qtyAngle.toFixed(),
					costAngle: costAngle.toFixed(),
					qtyInsert: qtyInsert.toFixed(),
					costInsert: costInsert.toFixed(),
					qtyPrint: qtyPrint.toFixed(),
					costPrint: costPrint.toFixed(),
					qtyCurve: qtyCurve.toFixed(),
					costCurve: costCurve.toFixed(),
					costTotal: costTotal.toFixed(),
					measure: measure,
					contract: contract,
					name: name,
					phone: phone
				};
			},
			calc___updateSt = function(evt) {
				var data = calc___getAllData();
				calc___st_qtyArea.text(data.qtyArea);
				calc___st_costArea.text(data.costArea);
				calc___st_color.text(data.color);
				calc___st_qtyChand.text(data.qtyChand);
				calc___st_costChand.text(data.costChand);
				calc___st_qtyPot.text(data.qtyPot);
				calc___st_costPot.text(data.costPot);
				calc___st_qtyPipe.text(data.qtyPipe);
				calc___st_costPipe.text(data.costPipe);
				calc___st_qtyAngle.text(data.qtyAngle);
				calc___st_costAngle.text(data.costAngle);
				calc___st_qtyInsert.text(data.qtyInsert);
				calc___st_costInsert.text(data.costInsert);
				calc___st_qtyPrint.text(data.qtyPrint);
				calc___st_costPrint.text(data.costPrint);
				calc___st_qtyCurve.text(data.qtyCurve);
				calc___st_costCurve.text(data.costCurve);
				calc___st_costTotal.text(data.costTotal);
			};


		calc___inp_phone.inputmask('+7(999)999-99-99', {
			showMaskOnHover: false
		});
		calc___inp_qtyArea.inputmask('decimal', {
			placeholder: '0,00 ',
			suffix: ' м²',
			positionCaretOnClick: 'ignore',
			radixPoint: ',',
			integerDigits: '3',
			digits: 2,
			digitsOptional: false,
			showMaskOnHover: false,
			rightAlign: false,
			allowMinus: false,
			unmaskAsNumber: true
		});
		$([calc___inp_qtyChand, calc___inp_qtyPot, calc___inp_qtyPipe, calc___inp_qtyAngle]).inputmask('decimal', {
			placeholder: '0',
			suffix: ' шт.',
			positionCaretOnClick: 'ignore',
			radixPoint: ',',
			digits: 0,
			allowMinus: false,
			integerDigits: '3',
			showMaskOnHover: false,
			rightAlign: false,
			allowMinus: false,
			unmaskAsNumber: true
		});
		$([calc___inp_qtyInsert, calc___inp_qtyPrint, calc___inp_qtyCurve]).inputmask('decimal', {
			placeholder: '0',
			suffix: ' м.п.',
			positionCaretOnClick: 'ignore',
			radixPoint: ',',
			digits: 0,
			allowMinus: false,
			integerDigits: '3',
			showMaskOnHover: false,
			rightAlign: false,
			allowMinus: false,
			unmaskAsNumber: true
		});


		calc___inp_manufacture.empty();
		for (var i = 0, l = calc___manufacturesArr.length; i < l; i++) {
			calc___inp_manufacture.append($('<option/>', {value: i, text: calc___manufacturesArr[i].name}));
		}
		calc___inp_manufacture.select2();
		calc___inp_material.select2();
		calc___inp_manufacture.bind('change', function() {
			var manufacture = calc___manufacturesArr[calc___inp_manufacture.val()];
			if (manufacture) {
				calc___inp_material.empty();
				for (var i = 0, l = manufacture.materials.length; i < l; i++) {
					calc___inp_material.append($('<option/>', {value: i, text: manufacture.materials[i].name}));
				}
				calc___sec_manufactureName = manufacture.name;
				calc___st_manufacture.text(manufacture.name);
				calc___desc_manufacture.html(manufacture.descHTML);
				calc___inp_material.trigger('change');
			}
		});
		calc___inp_material.bind('change', function() {
			var manufacture = calc___manufacturesArr[calc___inp_manufacture.val()];
			if (manufacture) {
				var material = manufacture.materials[calc___inp_material.val()];
				if (material) {
					calc___sec_materialName = material.name;
					calc___st_material.text(material.name);
					calc___desc_material.html(material.descHTML);
					calc___inp_qtyArea.trigger('input');
				}
			}
		});
		$([calc___inp_qtyArea, calc___inp_color, calc___inp_qtyChand, calc___inp_qtyPot, calc___inp_qtyPipe, calc___inp_qtyAngle, calc___inp_qtyInsert, calc___inp_qtyPrint, calc___inp_qtyCurve]).each(function(i, el) {
			el[0].oninput = calc___updateSt;
		}).bind('blur', calc___updateSt);

		calc___inp_manufacture.trigger('change');
	/* visler */
		var
			visler___baseWrapper = $('#viz-visler');
		var
			visler___firstLevelFactureEl = visler___baseWrapper.find('.viz-visler__viewer__factureBg'),
			visler___shadowEl = visler___baseWrapper.find('.viz-visler__viewer__shadow'),


			visler___ceilingBtn = visler___baseWrapper.find('.viz-visler___ceilingChsr__btn._isActive'),
			visler___ceilingVal, visler___ceilingName,
			visler___ceilingApplyEl,


			visler___colorBgBtn = visler___baseWrapper.find('.viz-visler___colorChsr._isBg .viz-visler___colorChsr__btn._isActive'),
			visler___colorBgVal, visler___colorBgName,
			visler___colorBgApplyEl = visler___baseWrapper.find('.viz-visler__viewer'),

			visler___colorFgBtn = visler___baseWrapper.find('.viz-visler___colorChsr._isFg .viz-visler___colorChsr__btn._isActive'),
			visler___colorFgVal, visler___colorFgName,
			visler___colorFgApplyEl = visler___baseWrapper.find('.viz-visler__viewer__ceiling'),


			visler___factureBgBtn = visler___baseWrapper.find('.viz-visler___factureChsr._isBg .viz-visler___factureChsr___btn._isActive'),
			visler___factureBgVal, visler___factureBgName,
			visler___factureBgApplyEl = visler___baseWrapper.find('.viz-visler__viewer__factureBg'),

			visler___factureFgBtn = visler___baseWrapper.find('.viz-visler___factureChsr._isFg .viz-visler___factureChsr___btn._isActive'),
			visler___factureFgVal, visler___factureFgName,
			visler___factureFgApplyEl = visler___baseWrapper.find('.viz-visler__viewer__factureFg'),

			visler___wallColorBtn = visler___baseWrapper.find('.viz-visler___colorChsr._isWall .viz-visler___colorChsr__btn._isActive'),
			visler___wallColorVal, visler___wallColorName,
			visler___wallColorApplyEl = visler___baseWrapper.find('.viz-visler__viewer__wallColor'),

			visler___wallFactureBtn = visler___baseWrapper.find('.viz-visler___factureChsr._isWall .viz-visler___factureChsr___btn._isActive'),
			visler___wallFactureVal, visler___wallFactureName,
			visler___wallFactureApplyEl = visler___baseWrapper.find('.viz-visler__viewer__wallFacture'),


			visler___floorBtn = visler___baseWrapper.find('.viz-visler___colorChsr._isFloor .viz-visler___colorChsr__btn._isActive'),
			visler___floorVal, visler___floorName,
			visler___floorApplyEl = visler___baseWrapper.find('.viz-visler__viewer__floor'),


			visler___lightLedBtn = visler___baseWrapper.find('.viz-visler___lightChsr__btn._isLed'),
			visler___lightLedIsVisible,
			visler___lightLedApplyEl = visler___baseWrapper.find('.viz-visler__viewer__lightLed'),

			visler___lightPotBtn = visler___baseWrapper.find('.viz-visler___lightChsr__btn._isPot'),
			visler___lightPotIsVisible,
			visler___lightPotApplyEl = visler___baseWrapper.find('.viz-visler__viewer__lightPot'),

			visler___lightChandBtn = visler___baseWrapper.find('.viz-visler___lightChsr__btn._isChand'),
			visler___lightChandIsVisible,
			visler___lightChandApplyEl = visler___baseWrapper.find('.viz-visler__viewer__lightChand');
		var
			visler___swapActiveClass = function(src, trg) {
				src && src.removeClass('_isActive');
				return trg.addClass('_isActive');
			};
		var
			visler___activate_typeBtn = function(btn) {
				visler___ceilingBtn = visler___swapActiveClass(visler___ceilingBtn, btn);

				visler___ceilingVal = visler___ceilingBtn.attr('data-type');
				visler___ceilingName = visler___ceilingBtn.attr('data-hname');

				visler___ceilingApplyEl && visler___ceilingApplyEl.removeClass('_isActive');
				visler___ceilingApplyEl = visler___baseWrapper.find('.viz-visler__viewer__ceiling__type[data-type="' + visler___ceilingVal + '"]').addClass('_isActive');

				visler___activate_factureFgBtn(visler___factureFgBtn);

				visler___shadowEl
					.insertBefore(btn.attr('data-shadow') == 'above' ? visler___lightLedApplyEl : visler___firstLevelFactureEl)
					.attr('src', 'img/viz/shadow/'+ visler___ceilingVal +'.png');

				if (btn.attr('data-chand') == 'none') {
					visler___lightChandBtn.hide();
					visler___lightChandApplyEl.hide();
				} else {
					visler___lightChandBtn.show();
					visler___lightChandApplyEl.show();
				}
				visler___activate_lightLedBtn();
				visler___activate_lightPotBtn();
				visler___activate_lightChandBtn();
			},
			visler___activate_colorBgBtn = function(btn) {
				visler___colorBgBtn = visler___swapActiveClass(visler___colorBgBtn, btn);
				visler___colorBgVal = visler___colorBgBtn.css('background-color');
				visler___colorBgName = visler___colorBgBtn.attr('data-color-name');
				visler___colorBgApplyEl.css('background-color', visler___colorBgVal);
			},
			visler___activate_colorFgBtn = function(btn) {
				visler___colorFgBtn = visler___swapActiveClass(visler___colorFgBtn, btn);
				visler___colorFgVal = visler___colorFgBtn.css('background-color');
				visler___colorFgName = visler___colorFgBtn.attr('data-color-name');
				visler___colorFgApplyEl.css('color', visler___colorFgVal);
			},
			visler___activate_factureBgBtn = function(btn) {
				visler___factureBgBtn = visler___swapActiveClass(visler___factureBgBtn, btn);
				visler___factureBgVal = visler___factureBgBtn.attr('data-fact');
				visler___factureBgName = visler___factureBgBtn.attr('data-fact-name');
				visler___factureBgApplyEl.attr('src', 'img/viz/fact/' + visler___factureBgVal + '.png');
			},
			visler___activate_factureFgBtn = function(btn) {
				visler___factureFgBtn = visler___swapActiveClass(visler___factureFgBtn, btn);
				visler___factureFgVal = visler___factureFgBtn.attr('data-fact');
				visler___factureFgName = visler___factureFgBtn.attr('data-fact-name');
				visler___factureFgApplyEl.attr('src', 'img/viz/fact/'+ visler___ceilingVal +'/' + visler___factureFgVal + '.png');
			},
			visler___activate_wallColorBtn = function(btn) {
				visler___wallColorBtn = visler___swapActiveClass(visler___wallColorBtn, btn);
				visler___wallColorVal = visler___wallColorBtn.attr('data-img');
				visler___wallColorName = visler___wallColorBtn.attr('data-hname');
				visler___wallColorApplyEl.attr('src', 'img/viz/wall/' + visler___wallColorVal);
			},
			visler___visler___activate_wallFactureBtn = function(btn) {
				visler___wallFactureBtn = visler___swapActiveClass(visler___wallFactureBtn, btn);
				visler___wallFactureVal = visler___wallFactureBtn.attr('data-img');
				visler___wallFactureName = visler___wallFactureBtn.attr('data-fact-name');
				visler___wallFactureApplyEl.attr('src', 'img/viz/paper/' + visler___wallFactureVal);
			},
			visler___activate_floorBtn = function(btn) {
				visler___floorBtn = visler___swapActiveClass(visler___floorBtn, btn);
				visler___floorVal = visler___floorBtn.attr('data-img');
				visler___floorName = visler___floorBtn.attr('data-hname');
				visler___floorApplyEl.attr('src', 'img/viz/floor/' + visler___floorVal);
			},
			visler___activate_lightLedBtn = function() {
				if (visler___lightLedBtn.hasClass('_isActive')) {
					visler___lightLedIsActive = true;
					visler___lightLedApplyEl.attr('src', 'img/viz/light/'+ visler___ceilingVal +'/led.png').addClass('_isActive');
				} else {
					visler___lightLedIsActive = false;
					visler___lightLedApplyEl.removeClass('_isActive');
				}
			},
			visler___activate_lightPotBtn = function() {
				if (visler___lightPotBtn.hasClass('_isActive')) {
					visler___lightPotIsActive = true;
					visler___lightPotApplyEl.attr('src', 'img/viz/light/'+ visler___ceilingVal +'/pot.png').addClass('_isActive');
				} else {
					visler___lightPotIsActive = false;
					visler___lightPotApplyEl.removeClass('_isActive');
				}
			},
			visler___activate_lightChandBtn = function() {
				if (visler___lightChandBtn.hasClass('_isActive') && !visler___lightChandApplyEl.is(':hidden')) {
					visler___lightChandIsActive = true;
					visler___lightChandApplyEl.attr('src', 'img/viz/light/'+ visler___ceilingVal +'/chand.png').addClass('_isActive');
				} else {
					visler___lightChandIsActive = false;
					visler___lightChandApplyEl.removeClass('_isActive');
				}
			},
			visler___toggle_lightLedBtn = function() {
				visler___lightLedBtn.toggleClass('_isActive');
				visler___activate_lightLedBtn();
			},
			visler___toggle_lightPotBtn = function() {
				visler___lightPotBtn.toggleClass('_isActive');
				visler___activate_lightPotBtn();
			},
			visler___toggle_lightChandBtn = function() {
				visler___lightChandBtn.toggleClass('_isActive');
				visler___activate_lightChandBtn();
			},
			visler___getAllData = function() {
				return {
					ceiling: visler___ceilingName,
					colorBg: visler___colorBgName,
					colorFg: visler___colorFgName,
					factureBg: visler___factureBgName,
					factureFg: visler___factureFgName,
					wallColor: visler___wallColorName,
					wallFacture: visler___wallFactureName,
					floor: visler___floorName,
					lightLed: visler___lightLedIsActive * 1,
					lightPot: visler___lightPotIsActive * 1,
					lightChand: visler___lightChandIsActive * 1
				};
			};

		visler___activate_colorBgBtn(visler___colorBgBtn);
		visler___activate_colorFgBtn(visler___colorFgBtn);
		visler___activate_factureBgBtn(visler___factureBgBtn);
		visler___activate_typeBtn(visler___ceilingBtn);

		visler___activate_wallColorBtn(visler___wallColorBtn);
		visler___visler___activate_wallFactureBtn(visler___wallFactureBtn);
		visler___activate_floorBtn(visler___floorBtn);

		visler___activate_lightLedBtn();
		visler___activate_lightPotBtn();
		visler___activate_lightChandBtn();

		visler___baseWrapper.find('.viz-visler___ceilingChsr').delegate('.viz-visler___ceilingChsr__btn:not(._isActive)', 'click', function() {
			visler___activate_typeBtn($(this));
		});

		visler___baseWrapper.find('.viz-visler___colorChsr._isBg').delegate('.viz-visler___colorChsr__btn:not(._isActive)', 'click', function() {
			visler___activate_colorBgBtn($(this));
		});
		visler___baseWrapper.find('.viz-visler___colorChsr._isFg').delegate('.viz-visler___colorChsr__btn:not(._isActive)', 'click', function() {
			visler___activate_colorFgBtn($(this));
		});
		visler___baseWrapper.find('.viz-visler___factureChsr._isBg').delegate('.viz-visler___factureChsr___btn:not(._isActive)', 'click', function(){
			visler___activate_factureBgBtn($(this));
		});
		visler___baseWrapper.find('.viz-visler___factureChsr._isFg').delegate('.viz-visler___factureChsr___btn:not(._isActive)', 'click', function(){
			visler___activate_factureFgBtn($(this));
		});

		visler___baseWrapper.find('.viz-visler___colorChsr._isWall').delegate('.viz-visler___colorChsr__btn:not(._isActive)', 'click', function() {
			visler___activate_wallColorBtn($(this));
		});
		visler___baseWrapper.find('.viz-visler___factureChsr._isWall').delegate('.viz-visler___factureChsr___btn:not(._isActive)', 'click', function() {
			visler___visler___activate_wallFactureBtn($(this));
		});

		visler___baseWrapper.find('.viz-visler___colorChsr._isFloor').delegate('.viz-visler___colorChsr__btn:not(._isActive)', 'click', function() {
			visler___activate_floorBtn($(this));
		});

		visler___lightPotBtn.bind('click', visler___toggle_lightPotBtn);
		visler___lightLedBtn.bind('click', visler___toggle_lightLedBtn);
		visler___lightChandBtn.bind('click', visler___toggle_lightChandBtn);

		visler___baseWrapper.find('.viz-visler__nav').delegate('.viz-visler__nav__btn', 'click', function() {
			visler___baseWrapper.find('.viz-visler__popup__content._isActive').removeClass('_isActive');
			visler___baseWrapper.find('.viz-visler__popup__content[data-popup="' + $(this).attr('data-target-popup') + '"]').addClass('_isActive');
			visler___baseWrapper.find('.viz-visler__popup').addClass('_isActive');
		});
		visler___baseWrapper.find('.viz-visler__popup__btnClose').click(function(){
			visler___baseWrapper.find('.viz-visler__popup, .viz-visler__popup__content._isActive').removeClass('_isActive');
		});
	/* form */
		var
			calc___footer = calc___baseWrapper.find('.viz-calc__footer'),
			calc___footer__popup = calc___footer.find('.viz-calc__footer__popup'),
			calc___footer__popup__btnClose = calc___footer.find('.viz-calc__footer__popup__btnClose'),
			calc___footer__popup__content = calc___footer.find('.viz-calc__footer__popup__content'),
			calc___btnSubmit = calc___footer.find('.viz-calc___btnSubmit');
		calc___footer__popup__btnClose.bind('click', function() {
			calc___footer.removeClass('_hasPopup');
		});
		calc___btnSubmit.bind('click', function() {
			calc___btnSubmit.prop('disabled', true).addClass('_isLoading');
			var clbk = function(success) {
				if (success) {
					calc___footer__popup__content.text('Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время');
				} else {
					calc___footer__popup__content.text('При отправке заявки произошла ошибка. Попробуйте позже...');
				}
				calc___footer.addClass('_hasPopup');
				calc___btnSubmit.prop('disabled', false).removeClass('_isLoading');
			};
			$.ajax({
				url: 'send.php',
				method: 'POST',
				data: {
					calc: calc___getAllData(),
					visler: visler___getAllData()
				},
				cache: false,
				dataType: 'text',
				success: function(resp, state, req) {
					console.log(resp, state, req);
					setTimeout(function() {
						clbk(req.status == 200 && resp == '1');
					}, 500);
				},
				error: function(e) {
					console.log(e);
					setTimeout(function() {
						clbk(false);
					}, 500);
				}
			});
		});
});
/* tooltip */
	$(function() {
		$('.viz-help').on('mouseenter', function() {
			var
				winWidth = $(window).width(),
				winPadding = 5,
				winMaxwidth = winWidth - (winPadding * 2),
				cntr = $(this),
				cntrPos = cntr.offset(),
				cntrWidth = cntr.width(),
				cntrMidwidth = cntrWidth / 2,
				tooltip = cntr.find('.viz-help__tooltip').css({maxWidth: 'none'}),
				tooltipPadding = 20,
				tooltipWidth = tooltip.width() + (tooltipPadding * 2),
				tooltipMaxwidth = Math.min(tooltipWidth, winMaxwidth),
				tooltipMidwidth = tooltipMaxwidth / 2,
				tooltipPosLeft = (cntrMidwidth - tooltipMidwidth) + Math.min(0, winMaxwidth - (cntrPos.left + cntrMidwidth + tooltipMidwidth - winPadding));
			tooltip.css({
				maxWidth: tooltipMaxwidth + 'px',
				left: tooltipPosLeft + 'px'
			});
		});
		$(window).bind('resize', function() {
			$('.viz-help__tooltip[style]').css({
				maxWidth: '',
				left: '',
			});
		});
	});
