<div class="mt-4">
    <h3>Linde 5</h3>
    <div >
      <input type="radio"  name="linde5" value="operative" id="operative-linde5" 
      @if (isset($recordStatus[10]->status))
      @if ($recordStatus[10]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-linde5" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde5" value="non-operative" id="non-operative-linde5" 
      @if (isset($recordStatus[10]->status))
      @if ($recordStatus[10]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde5" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde5" value="operative-wl" id="operative-wl-linde5" 
      @if (isset($recordStatus[10]->status))
      @if ($recordStatus[10]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde5" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input type="text" class="form-control {{ $errors->has('linde5limitant')?'is-invalid':'' }} " name="linde5limitant" id="linde5limitant" value="{{isset($recordStatus[10]->limitation) ? $recordStatus[10]->limitation:old('linde5limitant')}}">
    </div>
  </div>