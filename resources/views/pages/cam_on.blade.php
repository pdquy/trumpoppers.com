@extends('layout')
@section('contents')

<br>
<div>
	<div class="container">
		<style type="text/css">
			.congtacvien{
				text-align: center;
			}
		</style>

		<div class="congtacvien">
		<img width="100%" src="{{asset('public/uploads/images/website/camon.jpg')}}">
		</div>
		<div class="congtacvien">
		     <a href="{{URL::to('/trang-chu')}}" class="btn btn-warning">VỀ TRANG CHỦ</a>
		</div>
	</div>
</div>
<br>
@endsection