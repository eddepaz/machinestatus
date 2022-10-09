<div class="mt-4">
    <h3>TS7</h3>
    <div >
      <input type="radio"  name="ts7" value="operative" id="operative-ts7" 
      @if (isset($recordStatus[3]->status))
        @if ($recordStatus[3]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-ts7" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="ts7" value="non-operative" id="non-operative-ts7" 
      @if (isset($recordStatus[3]->status))
      @if ($recordStatus[3]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-ts7" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="ts7" value="operative-wl" id="operative-wl-ts7" 
      @if (isset($recordStatus[3]->status))
      @if ($recordStatus[3]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-ts7" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input  type="text" class="form-control {{ $errors->has('ts7limitant')?'is-invalid':'' }} " name="ts7limitant" id="ts7limitant" value="{{isset($recordStatus[3]->limitation) ? $recordStatus[3]->limitation:old('ts7limitant')}}">
    </div>
  </div>