<div class="alert  ">
<button class="close" data-dismiss="alert"></button>
Question: Advanced Input Field</div>

<p>
1. Make the Description, Quantity, Unit price field as text at first. When user clicks the text, it changes to input field for use to edit. Refer to the following video.

</p>


<p>
2. When user clicks the add button at left top of table, it wil auto insert a new row into the table with empty value. Pay attention to the input field name. For example the quantity field

<?php echo htmlentities('<input name="data[1][quantity]" class="">')?> ,  you have to change the data[1][quantity] to other name such as data[2][quantity] or data["any other not used number"][quantity]

</p>



<div class="alert alert-success">
<button class="close" data-dismiss="alert"></button>
The table you start with</div>

<table class="table table-striped table-bordered table-hover">
<thead>
<th><span id="add_item_button" class="btn mini green addbutton" onclick="addToObj=false">
											<i class="icon-plus"></i></span></th>
<th>Description</th>
<th>Quantity</th>
<th>Unit Price</th>
</thead>

<tbody id="table-body">
	<tr>
	<td></td>
	<td><textarea name="data[1][description]" class="m-wrap  description required" rows="2" ></textarea></td>
	<td><input name="data[1][quantity]" class=""></td>
	<td><input name="data[1][unit_price]"  class=""></td>
	
</tr>

</tbody>

</table>


<p></p>
<div class="alert alert-info ">
<button class="close" data-dismiss="alert"></button>
Video Instruction</div>

<p style="text-align:left;">
<video width="78%"   controls>
  <source src="/video/q3_2.mov">
Your browser does not support the video tag.
</video>
</p>





<?php $this->start('script_own');?>
<script>
$(document).ready(function(){

	let tableBody = $("#table-body");
	let currentRowCount = 1;

	$("#add_item_button").click(function(){	

		currentRowCount += 1

		let row = document.createElement("tr")

		let emptyRow = document.createElement("td")

		let description = document.createElement("td")
		let descriptionTextArea = document.createElement("textarea")
		descriptionTextArea.name = `data[${currentRowCount}][description]`
		descriptionTextArea.classList.add("m-wrap")
		descriptionTextArea.classList.add("description")
		descriptionTextArea.classList.add("required")
		descriptionTextArea.setAttribute("rows", 2)
		description.appendChild(descriptionTextArea)

		let quantity = document.createElement("td")
		let quantityInput = document.createElement("input")
		quantityInput.name = `data[${currentRowCount}][quantity]`
		quantity.appendChild(quantityInput)

		let unitPrice = document.createElement("td")
		let unitPriceInput = document.createElement("input")
		unitPriceInput.name = `data[${currentRowCount}][unit_price]`
		unitPrice.appendChild(unitPriceInput)

		row.appendChild(emptyRow)
		row.appendChild(description)
		row.appendChild(quantity)
		row.appendChild(unitPrice)
		
		tableBody[0].appendChild(row)
	});

	
});
</script>
<?php $this->end();?>

