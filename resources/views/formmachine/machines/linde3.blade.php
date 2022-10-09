<div class="mt-4">
    <h3>Linde 3</h3>
    <div >
      <input type="radio"  name="linde3" value="operative" id="operative-linde3" 
      @if (isset($recordStatus[12]->status))
      @if ($recordStatus[12]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-linde3" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde3" value="non-operative" id="non-operative-linde3" 
      @if (isset($recordStatus[12]->status))
      @if ($recordStatus[12]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde3" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde3" value="operative-wl" id="operative-wl-linde3" 
      @if (isset($recordStatus[12]->status))
      @if ($recordStatus[12]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde3" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('linde3limitant')?'is-invalid':'' }} " name="linde3limitant" id="linde3limitant" value="{{isset($recordStatus[12]->limitation) ? $recordStatus[12]->limitation:old('limitation')}}">
    </div>
  </div>