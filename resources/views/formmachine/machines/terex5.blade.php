<div class="mt-4">
    <h3>Terex 5</h3>
    <div >
      <input type="radio"  name="terex5" value="operative" id="operative-terex5" 
      @if (isset($recordStatus[6]->status))
      @if ($recordStatus[6]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-terex5" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex5" value="non-operative" id="non-operative-terex5" 
      @if (isset($recordStatus[6]->status))
      @if ($recordStatus[6]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-terex5" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex5" value="operative-wl" id="operative-wl-terex5" 
      @if (isset($recordStatus[6]->status))
      @if ($recordStatus[6]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-terex5" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('terex5limitant')?'is-invalid':'' }} " name="terex5limitant" id="terex5limitant" value="{{isset($recordStatus[6]->limitation) ? $recordStatus[6]->limitation:old('terex5limitant')}}">
    </div>
  </div>