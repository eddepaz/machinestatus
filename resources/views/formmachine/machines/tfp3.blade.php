<div class="mt-4">
    <h3>Taylor Frontal PR3</h3>
    <div >
      <input type="radio"  name="tfp3" value="operative" id="operative-tfp3" 
      @if (isset($recordStatus[1]->status))
        @if ($recordStatus[1]->status == 'Operativa')
        checked
        @endif
        @endif
        >
        <label for="operative-tfp3" >{{ 'Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tfp3" value="non-operative" id="non-operative-tfp3" 
      @if (isset($recordStatus[1]->status))
      @if ($recordStatus[1]->status == 'No Operativa')
      checked
      @endif
      @endif
      >
        <label for="non-operative-tfp3" >{{ 'No Operativa' }}</label>
    </div>
    <div >
      <input type="radio"  name="tfp3" value="operative-wl" id="operative-wl-tfp3" 
      @if (isset($recordStatus[1]->status))
      @if ($recordStatus[1]->status == 'Operativa con Limitantes')
      checked
      @endif
      @endif
      >
        <label for="operative-wl-tfp3" >{{ 'Operativa con Limintantes' }}</label>
    </div>
  
    <div>
      <input   type="text" class="form-control {{ $errors->has('tfp3limitant')?'is-invalid':'' }} " name="tfp3limitant" id="tfp3limitant" value="{{isset($recordStatus[1]->limitation) ? $recordStatus[1]->limitation:old('tfp3limitant')}}">
    </div>
  </div>