function Pager(tableName, itemsPerPage, escRow) {

this.tableName = tableName;

this.itemsPerPage = itemsPerPage;

this.currentPage = 1;

this.pages = 0;

this.inited = false;

this.escHeader = escRow;

this.showRecords = function(from, to) {

var rows = document.getElementById(tableName).rows;

// i starts from 1 to skip table header row

for (var i = this.escHeader; i < rows.length; i++) {

if (i < from || i > to)

rows[i].style.display = 'none';

else

rows[i].style.display = '';

}

}

this.showPage = function(pageNumber) {

if (! this.inited) {

alert("not inited");

return;

}

var oldPageAnchor = document.getElementById('pg'+this.currentPage);

oldPageAnchor.className = 'pg-normal';

this.currentPage = pageNumber;

var newPageAnchor = document.getElementById('pg'+this.currentPage);

newPageAnchor.className = 'active';

var from = (pageNumber - 1) * itemsPerPage + this.escHeader;

var to = from + itemsPerPage - 1;

this.showRecords(from, to);

}

this.prev = function() {

if (this.currentPage > 1)

this.showPage(this.currentPage - 1);

}

this.next = function() {

if (this.currentPage < this.pages) {

this.showPage(this.currentPage + 1);

}

}

this.init = function() {

var rows = document.getElementById(tableName).rows;

var records = (rows.length - this.escHeader);

this.pages = Math.ceil(records / itemsPerPage);

this.inited = true;

}

this.showPageNav = function(pagerName, positionId) {

if (! this.inited) {

alert("not inited");

return;

}

var element = document.getElementById(positionId);
var pagerHtml = "<ul class='pagination'>";
pagerHtml += '<li onclick="' + pagerName + '.prev();" class="waves-effect tooltipped" data-position="top" data-delay="0" data-tooltip="Previous"><i class="material-icons">chevron_left</i></li> ';

for (var page = 1; page <= this.pages; page++){
		pagerHtml += '<li id="pg' + page + '" class="waves-effect" onclick="' + pagerName + '.showPage(' + page + ');"><a>' + page + '</a></li> ';
}


pagerHtml += '<li onclick="'+pagerName+'.next();" class="waves-effect tooltipped" data-position="top" data-delay="0" data-tooltip="Next"><i class="material-icons">chevron_right</i></li>';
pagerHtml += '</ul>';
element.innerHTML = pagerHtml;

if(this.pages < 2){
	element.style.display = 'none';
}

}

}
