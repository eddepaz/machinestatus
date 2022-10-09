<div class="mt-4">
    <h3>Terex 6</h3>
    <div >
      <input type="radio"  name="terex6" value="operative" id="operative=terex6" 
      @if (isset($recordStatus[5]->status))
        @if ($recordStatus[5]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative=terex6" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex6" value="non-operative" id="non-operative=terex6" 
      @if (isset($recordStatus[5]->status))
      @if ($recordStatus[5]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative=terex6" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="terex6" value="operative-wl" id="operative-wl=terex6" 
      @if (isset($recordStatus[5]->status))
      @if ($recordStatus[5]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl=terex6" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('terex6limitant')?'is-invalid':'' }} " name="terex6limitant" id="terex6limitant" value="{{isset($recordStatus[5]->limitation) ? $recordStatus[5]->limitation:old('terex6limitant')}}">
    </div>
  </div>