<hr>

<div class="mt-3 text-center">
    <div class="row text-center">
        <div class="offset-md-2 col-md-8">
            <img src="{!! asset('assets/dashbaord/images/thanks.webp') !!}" class="img-fluid rounded" height="100px">
        </div>
    </div>
</div>

<!-- begin: button -->
<div class="row {!! Lang() == 'ar' ? 'pull-left' : 'pull-right' !!} mt-3">
    <div class="col-md-12">
        <button type="button" wire:click ="backStep(5)" class="btn btn-info btn-glow">
            {!! __('children.back') !!}
            <span wire:loading wire:target="backStep(5)">
                <i class="la la-refresh spinner"></i>
            </span>
        </button>
        <button type="button" wire:click ="submitForm" class="btn btn-primary  btn-glow">
            {!! __('children.save') !!}
            <span wire:loading wire:target="submitForm">
                <i class="la la-refresh spinner">
                </i>
            </span>
        </button>
    </div>
</div>
<div class="clearfix"></div>
<!-- end: button -->
