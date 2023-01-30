<x-jet-form-section submit="updateProfileInformation">
    
    <x-slot name="form">

        <x-jet-action-message on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>


        <!-- Name -->
        <div class="row mb-3">
            <x-jet-label for="name" value="{{ __('Full Name*') }}" class="col-md-4 col-lg-3 col-form-label"/>
            <div class="col-md-8 col-lg-9">
                <x-jet-input id="name" type="text" class="{{ $errors->has('name') ? 'is-invalid' : '' }} form-control" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" />
            </div>
        </div>


        <!-- Email -->
        <div class="row mb-3">
            <x-jet-label for="email" value="{{ __('Email*') }}" class="col-md-4 col-lg-3 col-form-label"/>
            <div class="col-md-8 col-lg-9">
                <x-jet-input id="email" type="email" class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control" wire:model.defer="state.email" />
                <x-jet-input-error for="email" />
            </div>    
        </div>
 
    </x-slot>

    <x-slot name="actions">
		<div class="d-flex align-items-baseline">
            <button type="submit" class="btn btn-get-started" wire:loading.class="disabled" wire:loading.attr="disabled" >Save Changes</button>
            {{--
    			<x-jet-button>
                    <!-- <div wire:loading class="spinner-border spinner-border-sm" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div> -->

    				{{ __('Save') }}
    			</x-jet-button>
            --}}
		</div>
    </x-slot>
</x-jet-form-section>