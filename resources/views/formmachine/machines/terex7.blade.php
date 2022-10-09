<div class="mt-4">
    <h3>Terex 7</h3>
    <div >
      <input type="radio"  name="terex7" value="operative" id="operative-terex7" 
      @if (isset($recordStatus[4]->status))
        @if ($recordStatus[4]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-terex7" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex7" value="non-operative" id="non-operative-terex7" 
      @if (isset($recordStatus[4]->status))
      @if ($recordStatus[4]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-terex7" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex7" value="operative-wl" id="operative-wl-terex7" 
      @if (isset($recordStatus[4]->status))
      @if ($recordStatus[4]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-terex7" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input   type="text" class="form-control {{ $errors->has('terex7limitant')?'is-invalid':'' }} " name="terex7limitant" id="terex7limitant" value="{{isset($recordStatus[4]->limitation) ? $recordStatus[4]->limitation:old('terex7limitant')}}">
    </div>
  </div>