window.addEvent('domready',function()  {
   
    selects = $$('#pal_stZachow_legend .tl_select');
	//console.log($$('#pal_stZachow_legend .tl_select').get('value'));
    selects.addEvent('change',function() { updateResult_Sum(); }); // change the function here
   
    function updateResult_Sum() {
        var total = 0;
        $each(selects,function(mySelect,index) {
            var myValue = mySelect.get('value');
            total = total + myValue.toInt();
        });
        $$('#ctrl_sumaNum').set('value',total);
    }
   //console.log($$('#pal_stZachow_legend .tl_select').get('value'));
    // function updateResult_Txt() {
        // var newTxt = '';
        // $each(selects,function(mySelect,index) {
            // var myValue = mySelect.get('value');
            // newTxt = newTxt + myValue + ', ';
        // });
        // document.id('ctrl_sumaNum').set('value',newTxt);
    // }
 
});