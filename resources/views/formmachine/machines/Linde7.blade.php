<div class="mt-4">
    <h3>Linde 7</h3>
    <div >
      <input type="radio"  name="linde7" value="operative" id="operative-linde7" 
      @if (isset($recordStatus[8]->status))
      @if ($recordStatus[8]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-linde7" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde7" value="non-operative" id="non-operative-linde7" 
      @if (isset($recordStatus[8]->status))
      @if ($recordStatus[8]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-linde7" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="linde7" value="operative-wl" id="operative-wl-linde7" 
      @if (isset($recordStatus[8]->status))
      @if ($recordStatus[8]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-linde7" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input type="text" class="form-control {{ $errors->has('linde7limitant')?'is-invalid':'' }} " name="linde7limitant" id="linde7limitant" value="{{isset($recordStatus[8]->limitation) ? $recordStatus[8]->limitation:old('linde7limitant')}}">
    </div>
  </div>