function DateSelector(selYear, selMonth, selDay, birthYear, birthMonth, birthDay)
{
    this.selYear = selYear;
    this.selMonth = selMonth;
    this.selDay = selDay;
	this.birthYear = birthYear;
	this.birthMonth = birthMonth;
	this.birthDay = birthDay;
    this.InitYearSelect();
    this.InitMonthSelect();
	this.InitDaySelect();
	$('#birth_year,#birth_month').change(function(){
		$('#birth_day').html('');
		var maxDay = new Date($('#birth_year').val(), $('#birth_month').val(), 0).getDate();
		for(var i = 1; i <= parseInt(maxDay); i++)
		{
			var op = window.document.createElement("OPTION");
			op.value = i;
			op.innerHTML = i+'日';
			$('#birth_day').append(op);
		}
	});
}
// 增加一个最大年份的属性
DateSelector.prototype.MinYear = 1900;
// 增加一个最大年份的属性
DateSelector.prototype.MaxYear = (new Date()).getFullYear();
// 初始化年份
DateSelector.prototype.InitYearSelect = function()
{
    for(var i = this.MaxYear; i >= this.MinYear; i--)
    {
        var op = window.document.createElement("OPTION");       
        op.value = i;
		if (op.value == this.birthYear)
		{
			op.selected = 'selected';
		}
        op.innerHTML = i+'年';
        this.selYear.appendChild(op);
    }
}

// 初始化月份
DateSelector.prototype.InitMonthSelect = function()
{
    for(var i = 1; i < 13; i++)
    {
        var op = window.document.createElement("OPTION");
        op.value = i;
		if (op.value == this.birthMonth)
		{
			op.selected = 'selected';
		}
        op.innerHTML = i+'月';
        this.selMonth.appendChild(op);
    }
}
//初始化天数
DateSelector.prototype.InitDaySelect = function()
{
	var maxDay = new Date($('#birth_year').val(), $('#birth_month').val(), 0).getDate();
    for(var i = 1; i <= maxDay; i++)
    {
        var op = window.document.createElement("OPTION");
        op.value = i;
		if (op.value == this.birthDay)
		{
			op.selected = 'selected';
		}
        op.innerHTML = i+'日';
        this.selDay.appendChild(op);
    }
}


// 根据年份与月份获取当月的天数
DateSelector.DaysInMonth = function(year, month)
{
    var date = new Date(year, month, 0);
    return date.getDate();
}
