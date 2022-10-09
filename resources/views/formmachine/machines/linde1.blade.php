<div class="mt-4">
    <h3>Linde 1</h3>
    <div>
      <input type="radio"  name="linde1" value="operative" id="operative-linde1" 
      @if (isset($recordStatus[14]))
        @if ($recordStatus[14]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-linde1" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde1" value="non-operative" id="non-operative-linde1" 
      @if (isset($recordStatus[14]))
      @if ($recordStatus[14]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde1" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde1" value="operative-wl" id="operative-wl-linde1" 
      @if (isset($recordStatus[14]))
      @if ($recordStatus[14]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde1" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
        <input type="text" class="form-control {{ $errors->has('linde1limitant')?'is-invalid':'' }} " name="linde1limitant" id="linde1limitant" value="{{isset($recordStatus[14]->limitation) ? $recordStatus[14]->limitation:old('limitation')}}">
    </div>

   

  </div>