<div class="mt-4">
    <h3>Linde 4</h3>
    <div >
      <input type="radio"  name="linde4" value="operative" id="operative-linde4" 
      @if (isset($recordStatus[11]->status))
        @if ($recordStatus[11]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-linde4" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde4" value="non-operative" id="non-operative-linde4" 
      @if (isset($recordStatus[11]->status))
      @if ($recordStatus[11]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde4" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde4" value="operative-wl" id="operative-wl-linde4" 
      @if (isset($recordStatus[11]->status))
      @if ($recordStatus[11]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde4" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('linde4limitant')?'is-invalid':'' }} " name="linde4limitant" id="linde4limitant" value="{{isset($recordStatus[11]->limitation) ? $recordStatus[11]->limitation:old('limitation')}}">
    </div>
  </div>