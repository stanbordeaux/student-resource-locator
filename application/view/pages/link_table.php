<?php echo load::view('header');?>

<div id="tablewrapper">
	<div id="tableheader">
    	<div class="search">
            <select id="columns" onchange="sorter.search('query')"></select>
            <input type="text" id="query" onkeyup="sorter.search('query')" />
        </div>
        <span class="details">
			<div>Records <span id="startrecord"></span>-<span id="endrecord"></span> of <span id="totalrecords"></span></div>
    		<div><a href="javascript:sorter.reset()">reset</a></div>
    	</span>
    </div>
    <table cellpadding="0" cellspacing="0" border="0" id="table" class="tinytable">
        <thead>
            <tr>
                <th><h3>Category</h3></th>
                <th><h3>Link</h3></th>
                <th><h3>Date Added</h3></th>
                <th><h3>Counter</h3></th>
                <th><h3>Action</h3></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($data as $td):?>
                    <td><?php echo $td['category'];?></td>
                    <td><?php echo $td['link'];?></td>
                    <td><?php echo date('d M Y', $td['date_added']);?></td>
                    <td><?php echo $td['counter'];?></td>
                    <td>delete</td>
            </tr>
                <?php endforeach;?>
        </tbody>
    </table>
    <div id="tablefooter">
      <div id="tablenav">
        	<div>
                <img src="<?php echo url::base();?>imgs/first.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1,true)" />
                <img src="<?php echo url::base();?>imgs/previous.gif" width="16" height="16" alt="First Page" onclick="sorter.move(-1)" />
                <img src="<?php echo url::base();?>imgs/next.gif" width="16" height="16" alt="First Page" onclick="sorter.move(1)" />
                <img src="<?php echo url::base();?>imgs/last.gif" width="16" height="16" alt="Last Page" onclick="sorter.move(1,true)" />
            </div>
            <div>
            	<select id="pagedropdown"></select>
			</div>
            <div>
            	<a href="javascript:sorter.showall()">view all</a>
            </div>
        </div>
		<div id="tablelocation">
        	<div>
                <select onchange="sorter.size(this.value)">
                <option value="5">5</option>
                    <option value="10" selected="selected">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
                <span>Entries Per Page</span>
            </div>
            <div class="page">Page <span id="currentpage"></span> of <span id="totalpages"></span></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo url::base();?>js/tinytable.js"></script>
<script type="text/javascript">
var sorter = new TINY.table.sorter('sorter','table',{
	headclass:'head',
	ascclass:'asc',
	descclass:'desc',
	evenclass:'evenrow',
	oddclass:'oddrow',
	evenselclass:'evenselected',
	oddselclass:'oddselected',
	paginate:true,
	size:10,
	colddid:'columns',
	currentid:'currentpage',
	totalid:'totalpages',
	startingrecid:'startrecord',
	endingrecid:'endrecord',
	totalrecid:'totalrecords',
	hoverid:'selectedrow',
	pageddid:'pagedropdown',
	navid:'tablenav',
	sortcolumn:1,
	sortdir:1,
	init:true
});
</script>