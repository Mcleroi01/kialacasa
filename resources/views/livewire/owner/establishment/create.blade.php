<div class="max-w-xl mx-auto">

    <div>

    </div>

    <div>
        <form wire:submit.prevent="save" class="space-y-4">
            <flux:field>
                <flux:label>Username</flux:label>

                <flux:description>This will be publicly displayed.</flux:description>

                <flux:input />

                <flux:error name="username" />
            </flux:field>

            <flux:field>
                <flux:label>Username</flux:label>

                <flux:description>This will be publicly displayed.</flux:description>

                <flux:input />

                <flux:error name="username" />
            </flux:field>

            <div class="flex gap-4">
                <flux:field>
                    <flux:label>Username</flux:label>

                    <flux:description>This will be publicly displayed.</flux:description>

                    <flux:input />

                    <flux:error name="username" />
                </flux:field>
                <flux:field>
                    <flux:label>Username</flux:label>

                    <flux:description>This will be publicly displayed.</flux:description>

                    <flux:input />

                    <flux:error name="username" />
                </flux:field>
            </div>

            <div>
                <flux:input type="email" label="Email" />
                <flux:input type="password" label="Password" />
                <flux:input type="date" max="2999-12-31" label="Date" />
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-xl hover:bg-blue-700">
                Enregistrer
            </button>
        </form>
    </div>



</div>
