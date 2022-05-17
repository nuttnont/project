// document.getElementById('fuel').addEventListener('change', function (evt) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร';
//   DivTxt[2] = 'ลิตร';
//   DivTxt[3] = 'ลิตร';
//   DivTxt[4] = 'ยูนิต';
//   DivTxt[5] = ' ';

//   var type = this.selectedOptions[0].value;
//   console.dir(this);
//   document.getElementById('fuel-input').setAttribute('name', type);
//   txtSelected = fuel.selectedIndex;
//   document.getElementById('fuelunit').innerHTML = DivTxt[txtSelected];
// });

// รายละเอียดเชื้อเพลิงที่ใช้ในเดือนนี้ ----------------------------------------------------------

function fuelSelectChangeValue(slction) {
  var DivTxt = new Array();
  DivTxt[0] = ' ';
  DivTxt[1] = 'ลิตร <style> #fuelunit {display: block !important;} </style>';
  DivTxt[2] = 'ลิตร <style> #fuelunit {display: block !important;} </style>';
  DivTxt[3] = 'ลิตร <style> #fuelunit {display: block !important;} </style>';
  DivTxt[4] = 'ยูนิต <style> #fuelunit {display: block !important;} </style>';
  DivTxt[5] = ' ';

  var type = slction.selectedOptions[0].value;
  console.dir(slction);
  document.getElementById('fuel-input').setAttribute('name', type);

  txtSelected = slction.selectedIndex;
  document.getElementById('fuelunit').innerHTML = DivTxt[txtSelected];
}

// function fuelSelectChangeValue2(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit2 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit2 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit2 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit2 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input2').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit2').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue3(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit3 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit3 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit3 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit3 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input3').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit3').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue4(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit4 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit4 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit4 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit4 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input4').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit4').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue5(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit5 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit5 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit5 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit5 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input5').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit5').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue6(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit6 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit6 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit6 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit6 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input6').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit6').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue7(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit7 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit7 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit7 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit7 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input7').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit7').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue8(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit8 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit8 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit8 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit8 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input8').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit8').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue9(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit9 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit9 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit9 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit9 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input9').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit9').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue10(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร <style> #fuelunit10 {display: block !important;} </style>';
//   DivTxt[2] = 'ลิตร <style> #fuelunit10 {display: block !important;} </style>';
//   DivTxt[3] = 'ลิตร <style> #fuelunit10 {display: block !important;} </style>';
//   DivTxt[4] = 'ยูนิต <style> #fuelunit10 {display: block !important;} </style>';
//   DivTxt[5] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('fuel-input10').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit10').innerHTML = DivTxt[txtSelected];
// }

// รายละเอียดและปริมาณการใช้วัตถุระเบิดในเดือนนี้ ----------------------------------------------------------

function explosiveSelectChangeValue(slction) {
  var DivTxt = new Array();
  DivTxt[0] = ' ';
  DivTxt[1] =
      '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit {display: block !important; padding: 0;} </style>';
  DivTxt[2] =
      'ดอก <style> #explosiveunit {display: block !important;} </style>';
  DivTxt[3] =
      'กิโลกรัม <style> #explosiveunit {display: block !important;} </style>';
  DivTxt[4] = ' ';

  var type = slction.selectedOptions[0].value;
  console.dir(slction);
  document.getElementById('explosive-input').setAttribute('name', type);

  txtSelected = slction.selectedIndex;
  document.getElementById('explosiveunit').innerHTML = DivTxt[txtSelected];
}

// function explosiveSelectChangeValue2(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit2 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit2 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit2 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input2').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit2').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue3(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit3 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit3 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit3 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input3').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit3').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue4(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit4 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit4 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit4 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input4').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit4').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue5(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit5 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit5 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit5 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input5').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit5').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue6(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit6 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit6 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit6 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input6').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit6').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue7(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit7 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit7 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit7 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input7').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit7').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue8(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit8 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit8 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit8 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input8').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit8').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue9(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit9 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit9 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit9 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input9').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit9').innerHTML = DivTxt[txtSelected];
// }

// function explosiveSelectChangeValue10(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] =
//     '<div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio" value="นัด"> <label class="form-check-label" for="inlineRadio1">นัด</label> </div> <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="explosiveRadioOptions" id="explosiveRadio2" value="กิโลกรัม"> <label class="form-check-label" for="explosiveRadio2">กิโลกรัม</label> </div> <style> #explosiveunit10 {display: block !important; padding: 0;} </style>';
//   DivTxt[2] =
//     'ดอก <style> #explosiveunit10 {display: block !important;} </style>';
//   DivTxt[3] =
//     'กิโลกรัม <style> #explosiveunit10 {display: block !important;} </style>';
//   DivTxt[4] = ' ';

//   var type = slction.selectedOptions[0].value;
//   console.dir(slction);
//   document.getElementById('explosive-input10').setAttribute('name', type);

//   txtSelected = slction.selectedIndex;
//   document.getElementById('explosiveunit10').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue2(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร';
//   DivTxt[2] = 'ลิตร';
//   DivTxt[3] = 'ลิตร';
//   DivTxt[4] = 'ยูนิต';
//   DivTxt[5] = ' ';

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit2').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue3(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร';
//   DivTxt[2] = 'ลิตร';
//   DivTxt[3] = 'ลิตร';
//   DivTxt[4] = 'ยูนิต';
//   DivTxt[5] = ' ';

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit3').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue4(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร';
//   DivTxt[2] = 'ลิตร';
//   DivTxt[3] = 'ลิตร';
//   DivTxt[4] = 'ยูนิต';
//   DivTxt[5] = ' ';

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit4').innerHTML = DivTxt[txtSelected];
// }

// function fuelSelectChangeValue5(slction) {
//   var DivTxt = new Array();
//   DivTxt[0] = ' ';
//   DivTxt[1] = 'ลิตร';
//   DivTxt[2] = 'ลิตร';
//   DivTxt[3] = 'ลิตร';
//   DivTxt[4] = 'ยูนิต';
//   DivTxt[5] = ' ';

//   txtSelected = slction.selectedIndex;
//   document.getElementById('fuelunit5').innerHTML = DivTxt[txtSelected];
// }

// ----------------------------------------------------------

// $(document).ready(function () {
//   var i = 1;
//   $('#add').click(function () {
//     i++;
//     $('#dynamic_field').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="tractor[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="tractor_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_2').click(function () {
//     i++;
//     $('#dynamic_field_2').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="loader[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="loader_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_3').click(function () {
//     i++;
//     $('#dynamic_field_3').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="excavator[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="excavator_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_4').click(function () {
//     i++;
//     $('#dynamic_field_4').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="carbonatedmachine[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="carbonatedmachine_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_5').click(function () {
//     i++;
//     $('#dynamic_field_5').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="driller[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="driller_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_6').click(function () {
//     i++;
//     $('#dynamic_field_6').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="jackhammer[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="jackhammer_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_7').click(function () {
//     i++;
//     $('#dynamic_field_7').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="sandpump[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="sandpump_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_8').click(function () {
//     i++;
//     $('#dynamic_field_8').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="waterpump[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="waterpump_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_9').click(function () {
//     i++;
//     $('#dynamic_field_9').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="dumpertruck[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="dumpertruck_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_10').click(function () {
//     i++;
//     $('#dynamic_field_10').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="watertruck[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="watertruck_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_11').click(function () {
//     i++;
//     $('#dynamic_field_11').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="conveyorbelt[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="conveyorbelt_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_12').click(function () {
//     i++;
//     $('#dynamic_field_12').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">รุ่น</label> <div class="col-6"> <select class="form-control name_list" name="wrstransport[]"> <option>option 1</option> <option>option 2</option> <option>option 3</option> <option>option 4</option> <option>option 5</option> </select> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="wrstransport_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_13').click(function () {
//     i++;
//     $('#dynamic_field_13').append(
//       '<div id="row' +
//         i +
//         '" class="row col-sm-12 px-0 mx-0"><div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label"></label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="other[]"> </div> <label for="example-text-input" class="col-3 col-form-label"></label> </div> <div class="form-group row col-sm-5 px-0 mx-0"> <label for="example-text-input" class="col-3 col-form-label">จำนวน</label> <div class="col-6"> <input class="form-control name_list" type="text" placeholder="..." id="example-text-input" name="other_value[]"> </div> <label for="example-text-input" class="col-3 col-form-label">คัน</label> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div></div>'
//     );
//   });
//   $('#add_14').click(function () {
//     i++;
//     $('#dynamic_field_14').append(
//       '<div id="row' +
//         i +
//         '" class="form-group row col-sm-6 px-0 mx-0"> <label for="example-text-input" class="col-12 col-form-label">&nbsp;</label> <div class="row col-sm-12 px-0 mx-0"> <div class="form-group row col-sm-9 mx-0"> <input class="form-control" type="text" placeholder="..." id="example-text-input" name="mineraltype[]"> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div> </div> </div>'
//     );
//   });
//   $('#add_15').click(function () {
//     i++;
//     $('#dynamic_field_15').append(
//       '<div id="row' +
//         i +
//         '" class="form-group row col-sm-6 px-0 mx-0"> <label for="example-text-input" class="col-12 col-form-label">&nbsp;</label> <div class="row col-sm-12 px-0 mx-0"> <div class="form-group row col-sm-9 mx-0"> <input class="form-control" type="text" placeholder="..." id="example-text-input" name="mineraltype_2[]"> </div> <div class="form-group row col-sm-2 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div> </div> </div>'
//     );
//   });
//   $('#add_fuel').click(function () {
//     i++;
//     $('#dynamic_field_fuel').append(
//       '<div id="row' +
//         i +
//         '" class="form-group row col-sm-6 p-0 m-0"> <div class="row col-sm-12 p-0 m-0"> <div class="form-group row col-sm-4 mx-0"> <select class="form-control" name="fuel" id="fuel" onchange="fuelSelectChangeValue' +
//         i +
//         '(this)"> <option disable hidden selected>โปรดเลือก</option> <option value="Fd_Benzene">น้ำมันเบนซิน</option> <option value="Fd_Diesel">น้ำมันดีเซล</option> <option value="Fd_Lubricating_Oil">น้ำมันหล่อลื่น</option> <option value="Fd_Electricity">ไฟฟ้า</option> <option value="Fd_Other">เชื่อเพลิงอื่นๆ</option> </select> </div> <div class="form-group row col-sm-5 mx-0 px-0"> <div class="form-group row col mx-0"> <input class="form-control" type="text" placeholder="..." id="fuel-input' +
//         i +
//         '" name="fuel[]"> </div> <label class="col-3 col-form-label" id="fuelunit' +
//         i +
//         '" style="display: none;"></label> </div> <div class="form-group row col-sm-3 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div> </div> </div>'
//     );
//   });
//   $('#add_explosive').click(function () {
//     i++;
//     $('#dynamic_field_explosive').append(
//       '<div id="row' +
//         i +
//         '" class="form-group row col-sm-6 p-0 m-0"> <div class="row col-sm-12 p-0 m-0"> <div class="form-group row col-sm-4 mx-0"> <select class="form-control" name="explosive" id="explosive" onchange="explosiveSelectChangeValue' +
//         i +
//         '(this)"> <option disable hidden selected>โปรดเลือก</option> <option value="E_Meterial">วัตถุระเบิด</option> <option value="E_Cap">แก็ป</option> <option value="E_Ammonia">ปุ๋ยแอมโมเนีย</option> <option value="E_Other">อื่น ๆ</option> </select> </div> <div class="form-group row col-sm-5 mx-0 px-0"> <div class="form-group row col mx-0"> <input class="form-control" type="text" placeholder="..." id="explosive-input' +
//         i +
//         '" name="explosive[]"> </div> <label class="col-3 col-form-label" id="explosiveunit' +
//         i +
//         '" style="display: none;"></label> </div> <div class="form-group row col-sm-3 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div> </div> </div>'
//     );
//   });
//   $('#add_mineral').click(function () {
//     i++;
//     $('#dynamic_field_mineral').append(
//       '<div id="row' +
//         i +
//         '" class="form-group row col-sm-6 p-0 m-0"> <div class="row col-sm-12 p-0 m-0"> <div class="form-group row col-sm-4 mx-0"> <select class="form-control" name="explosive" id="explosive" onchange="explosiveSelectChangeValue' +
//         i +
//         '(this)"> <option disable hidden selected>โปรดเลือก</option> <option value="E_Meterial">วัตถุระเบิด</option> <option value="E_Cap">แก็ป</option> <option value="E_Ammonia">ปุ๋ยแอมโมเนีย</option> <option value="E_Other">อื่น ๆ</option> </select> </div> <div class="form-group row col-sm-5 mx-0 px-0"> <div class="form-group row col mx-0"> <input class="form-control" type="text" placeholder="..." id="explosive-input' +
//         i +
//         '" name="explosive[]"> </div> <label class="col-3 col-form-label" id="explosiveunit' +
//         i +
//         '" style="display: none;"></label> </div> <div class="form-group row col-sm-3 px-0 mx-0"> <div class="d-grid gap-2 justify-content-center container-fluid"> <button class="btn btn-danger btn_remove" type="button" name="remove" id="' +
//         i +
//         '" style="width: 100%;">ลบ</button> </div> </div> </div> </div>'
//     );
//   });
//   $(document).on('click', '.btn_remove', function () {
//     var button_id = $(this).attr('id');
//     $('#row' + button_id + '').remove();
//   });
//   $('#submit').click(function () {
//     $.ajax({
//       url: 'name.php',
//       method: 'POST',
//       data: $('#add_name').serialize(),
//       success: function (data) {
//         alert(data);
//         $('#add_name')[0].reset();
//       },
//     });
//   });
// });

// ----------------------------------------------------------

const steps = Array.from(document.querySelectorAll('form .step'));
const nextBtn = document.querySelectorAll('form .next-btn');
const prevBtn = document.querySelectorAll('form .previous-btn');
const form = document.querySelector('form');

nextBtn.forEach(button => {
  button.addEventListener('click', () => {
      changeStep('next');
  });
});
prevBtn.forEach(button => {
  button.addEventListener('click', () => {
      changeStep('prev');
  });
});

// form.addEventListener('submit', e => {
//   e.preventDefault();
//   const inputs = [];
//   form.querySelectorAll('input').forEach(input => {
//     const { name, value } = input;
//     inputs.push({
//       name,
//       value,
//     });
//   });
//   console.log(inputs);
//   form.reset();
// });

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector('.active');
  index = steps.indexOf(active);
  steps[index].classList.remove('active');
  if (btn === 'next') {
      index++;
  } else if (btn === 'prev') {
      index--;
  }
  steps[index].classList.add('active');
}

// ----------------------------------------------------------

$(document).ready(function() {
  $('#showdata').val($('#selectdata option:selected').data('showdata'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata').val($('#selectdata option:selected').data('showdata'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_2').val($('#selectdata option:selected').data('showdata_2'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_2').val($('#selectdata option:selected').data('showdata_2'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_3').val($('#selectdata option:selected').data('showdata_3'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_3').val($('#selectdata option:selected').data('showdata_3'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_4').val($('#selectdata option:selected').data('showdata_4'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_4').val($('#selectdata option:selected').data('showdata_4'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_5').val($('#selectdata option:selected').data('showdata_5'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_5').val($('#selectdata option:selected').data('showdata_5'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_6').val($('#selectdata option:selected').data('showdata_6'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_6').val($('#selectdata option:selected').data('showdata_6'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_7').val($('#selectdata option:selected').data('showdata_7'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_7').val($('#selectdata option:selected').data('showdata_7'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_8').val($('#selectdata option:selected').data('showdata_8'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_8').val($('#selectdata option:selected').data('showdata_8'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_9').val($('#selectdata option:selected').data('showdata_9'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_9').val($('#selectdata option:selected').data('showdata_9'));
      });
  });
});

$(document).ready(function() {
  $('#showdata_10').val($('#selectdata option:selected').data('showdata_10'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_10').val(
              $('#selectdata option:selected').data('showdata_10')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_11').val($('#selectdata option:selected').data('showdata_11'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_11').val(
              $('#selectdata option:selected').data('showdata_11')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_12').val($('#selectdata option:selected').data('showdata_12'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_12').val(
              $('#selectdata option:selected').data('showdata_12')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_13').val($('#selectdata option:selected').data('showdata_13'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_13').val(
              $('#selectdata option:selected').data('showdata_13')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_14').val($('#selectdata option:selected').data('showdata_14'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_14').val(
              $('#selectdata option:selected').data('showdata_14')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_15').val($('#selectdata option:selected').data('showdata_15'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_15').val(
              $('#selectdata option:selected').data('showdata_15')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_16').val($('#selectdata option:selected').data('showdata_16'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_16').val(
              $('#selectdata option:selected').data('showdata_16')
          );
      });
  });
});
// -------------------------------------------------------------------------------------------------------------------------

$(document).ready(function() {
  $('#showdata201').val($('#selectdata2 option:selected').data('showdata201'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata201').val(
              $('#selectdata2 option:selected').data('showdata201')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata202').val($('#selectdata2 option:selected').data('showdata202'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata202').val(
              $('#selectdata2 option:selected').data('showdata202')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata203').val($('#selectdata2 option:selected').data('showdata203'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata203').val(
              $('#selectdata2 option:selected').data('showdata203')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata204').val($('#selectdata2 option:selected').data('showdata204'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata204').val(
              $('#selectdata2 option:selected').data('showdata204')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata205').val($('#selectdata2 option:selected').data('showdata205'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata205').val(
              $('#selectdata2 option:selected').data('showdata205')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata206').val($('#selectdata2 option:selected').data('showdata206'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata206').val(
              $('#selectdata2 option:selected').data('showdata206')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata207').val($('#selectdata2 option:selected').data('showdata207'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata207').val(
              $('#selectdata2 option:selected').data('showdata207')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata208').val($('#selectdata2 option:selected').data('showdata208'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata208').val(
              $('#selectdata2 option:selected').data('showdata208')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata209').val($('#selectdata2 option:selected').data('showdata209'));
  $(function() {
      $('#selectdata2').change(function() {
          $('#showdata209').val(
              $('#selectdata2 option:selected').data('showdata209')
          );
      });
  });
});

// ---------------------------------------------------------------------------------------------------------

$(document).ready(function() {
  $('#showdata_allowed').val(
      $('#selectdata option:selected').data('showdata_allowed')
  );
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_allowed').val(
              $('#selectdata option:selected').data('showdata_allowed')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_rai').val($('#selectdata option:selected').data('showdata_rai'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_rai').val(
              $('#selectdata option:selected').data('showdata_rai')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_ngan').val(
      $('#selectdata option:selected').data('showdata_ngan')
  );
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_ngan').val(
              $('#selectdata option:selected').data('showdata_ngan')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_wa').val($('#selectdata option:selected').data('showdata_wa'));
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_wa').val(
              $('#selectdata option:selected').data('showdata_wa')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_mineral').val(
      $('#selectdata option:selected').data('showdata_mineral')
  );
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_mineral').val(
              $('#selectdata option:selected').data('showdata_mineral')
          );
      });
  });
});

$(document).ready(function() {
  $('#showdata_mineral2').val(
      $('#selectdata option:selected').data('showdata_mineral2')
  );
  $(function() {
      $('#selectdata').change(function() {
          $('#showdata_mineral2').val(
              $('#selectdata option:selected').data('showdata_mineral2')
          );
      });
  });
});

$(document).ready(function() {
  // $('#sel_users').select2();

  $('#machine_type').change(function() {
      var value = $(this).val();
      $.ajax({
          url: 'selectData.php?type=' + value,
          type: 'get',
          success: function(data) {
              $('#changee').html(data);
          },
          error: function() {
              $('#changee').text('An error occurred');
          },
      });

      // $('#sel_users').val(value);
      //   $('#sel_users').select2().trigger('change');
  });
});
$(document).ready(function() {
  // $('#sel_users').select2();

  $('#machine_type').change(function() {
      var value = $(this).val();
      $('.name_list').val("");
      $.ajax({
          url: 'selectData.php',
          type: 'get',
          success: function(data) {
              $('#changee2').html(data);
          },
          error: function() {
              $('#changee2').text('An error occurred');
          },
      });

      // $('#sel_users').val(value);
      //   $('#sel_users').select2().trigger('change');
  });
});
// $(document).ready(function() {


//     // $('#sel_users').select2();

//     $('#machine_brand').change(function() {
//         var value = $(this).val();
//         $.ajax({
//             url: 'selectData2.php?brand222=' + value,
//             type: 'get',
//             success: function(data) {
//                 $('#changee2').html(data);
//                 $('body').css('background', 'black');
//             },
//             error: function() {
//                 $('#changee2').text('An error occurred');
//             }
//         });

//     });
// });


// $(document).ready(function() {
//     function test1122() {
//         var value = $(this).val();
//         $.ajax({
//             url: 'selectData2.php?brand222=' + value,
//             type: 'get',
//             success: function(data) {
//                 $('#changee2').html(data);
//                 $('body').css('background', 'black');
//             },
//             error: function() {
//                 $('#changee2').text('An error occurred');
//             },
//         });
//     };
// });