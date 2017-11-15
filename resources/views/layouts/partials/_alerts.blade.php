@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
			&times;
		</button>
    </div>
@endif

@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
			&times;
		</button>
    </div>
@endif

@if(session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
			&times;
		</button>
    </div>
@endif