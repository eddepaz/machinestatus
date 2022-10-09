<div class="mt-4">
    <h3>Linde 6</h3>
    <div >
      <input type="radio"  name="linde6" value="operative" id="operative-linde6" 
      @if (isset($recordStatus[9]->status))
        @if ($recordStatus[9]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-linde6" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde6" value="non-operative" id="non-operative-linde6" 
      @if (isset($recordStatus[9]->status))
      @if ($recordStatus[9]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde6" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde6" value="operative-wl" id="operative-wl-linde6" 
      @if (isset($recordStatus[9]->status))
      @if ($recordStatus[9]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde6" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input type="text" class="form-control {{ $errors->has('linde6limitant')?'is-invalid':'' }} " name="linde6limitant" id="linde6limitant" value="{{isset($recordStatus[9]->limitation) ? $recordStatus[9]->limitation:old('linde6limitant')}}">
    </div>
  </div>