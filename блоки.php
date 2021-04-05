<div class="paginacia-block">
						<ul class="pagination">
							<li class="disabled"><span>«</span></li>
							<li class="active"><a href="katalog/karkasnyie-doma/">1</a></li>
							<li><a href="katalog/karkasnyie-doma/?page=2">2</a></li>
							<li><a href="katalog/karkasnyie-doma/?page=3">3</a></li>
							<li class="disabled"><span>...</span></li>
							<li><a href="katalog/karkasnyie-doma/?page=11">11</a></li>
							<li><a href="katalog/karkasnyie-doma/?page=12">12</a></li>
							<li class="control"><a href="katalog/karkasnyie-doma/?page=2">»</a></li>
						</ul>
					</div>

.paginacia-block
	width: 100%
	margin-top: 30px
	text-align: center
	li
		display: inline
		a, span
			padding: 0 12px
			height: 36px
			border: 1px solid #d9d9d9
			color: $a
			background: #fff
			display: inline-block
			line-height: 34px
		&.active
			a
				color: #fff
				background: $a

//////////////////////////////////////////////////