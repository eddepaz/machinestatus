<div class="mt-4">
    <h3>Terex 4</h3>
    <div >
      <input type="radio"  name="terex4" value="operative" id="operative-terex4" 
      @if (isset($recordStatus[7]->status))
      @if ($recordStatus[7]->status == 'Operativa')
      checked
      @endif
      @endif
      >
        <label for="operative-terex4" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex4" value="non-operative" id="non-operative-terex4" 
      @if (isset($recordStatus[7]->status))
      @if ($recordStatus[7]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-terex4" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex4" value="operative-wl" id="operative-wl-terex4" 
      @if (isset($recordStatus[7]->status))
      @if ($recordStatus[7]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-terex4" >{{ 'Operativa con Limitantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('terex4limitant')?'is-invalid':'' }} " name="terex4limitant" id="terex4limitant" value="{{isset($recordStatus[7]->limitation) ? $recordStatus[7]->limitation:old('terex4limitant')}}">
    </div>
  </div>