<h1 class="page-header">Dashboard</h1>

<?php 
 	$currentuser = $this->aauth->get_user()->id;
 	if(! $this->aauth->is_allowed('VIEW_USER',$currentuser)){
		echo 'tidak boleh view';
	}else{
		echo 'boleh view ye';
	}
  ?>

<br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet risus sit amet felis hendrerit fringilla. Suspendisse ipsum orci, tristique sit amet aliquet vel, fringilla sed ligula. Sed congue, sapien eget pretium semper, lacus orci porttitor ipsum, a vehicula ligula lorem sit amet odio. Morbi pulvinar molestie lorem, non rutrum ipsum condimentum in. Fusce vitae lacus nibh. Fusce semper dolor metus, in consectetur lectus luctus id. Suspendisse ac ultrices neque, et posuere ligula.

Cras tempus aliquet mi, a rhoncus urna. Nam vulputate euismod ante et finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer sollicitudin nisi at nunc rhoncus blandit. Aliquam erat volutpat. Etiam id arcu sit amet augue varius gravida. Donec consectetur commodo arcu ac mollis. Duis vel mi lobortis sapien luctus vestibulum.

Donec congue felis tempor laoreet porta. Suspendisse consectetur cursus consectetur. Donec nulla risus, malesuada id varius quis, volutpat non eros. Aliquam eget orci quis ipsum dignissim semper. Sed eros turpis, feugiat quis tellus quis, malesuada bibendum libero. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse at eros non turpis gravida sagittis. Maecenas id elit varius, sollicitudin justo at, iaculis nisl. Nullam porttitor elit metus, quis commodo tellus vehicula ac. In viverra nunc sed magna sagittis, vitae sollicitudin tellus condimentum.