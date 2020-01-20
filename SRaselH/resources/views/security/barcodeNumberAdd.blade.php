@include('layout.beforeSearchMaster')
@include('layout.SearchMaster')
@include('layout.afterSearchMasterUserAdmin')



<div class="features_area section_gap_change">


				<span class="contact100-form-title-1">
                    Particular User Details List
				</span>

        <div class="containerChange">



            <div class="wrap-contact100">

                {!! Form::open(array('url' => url('barcodeUDetails/save'), 'files' => true, 'class'=>'contact100-form validate-form') )  !!}

                @if(!empty($bar))
                    <input type="hidden" name="id" value="{{$bar->id}}">
                @endif

                <div class="wrap-input100 validate-input" >
                    <span class="label-input100">Barcode Number:</span>
                    <input class="input100" type="text" name="barcodeNumber"  placeholder="Enter Barcode Number" required>
                    <span class="focus-input100"></span>
                </div>





                <div class="container-contact100-form-btn">
                        <button class="contact100-form-btn1">
						<span>
							Save
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                        </button>
                    </div>

                    {!! Form::close() !!}



            </div>


        </div>



    </div>






@include('layout.beforePagination')

@include('layout.afterPagination')

<script src="{{asset('https://code.jquery.com/jquery-1.12.4.js')}}"></script>
<script src="{{asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js')}}"></script>
<script>
    $( function() {
        $('.date').datepicker();
    });
</script>