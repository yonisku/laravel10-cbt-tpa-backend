<div class="alert alert-success alert-has-icon alert-dismissible show fade">
    <div class="alert-icon d-flex align-items-center"><i class="far fa-circle-check"></i></div>
    <div class="alert-body">
        <div class="alert-title">{{ Session::get('message')[0] }}</div>
        {{ Session::get('message')[1] }}
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
    </div>
</div>
