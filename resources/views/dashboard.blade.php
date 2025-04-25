<x-layouts.app :title="__('Dashboard')">
    <div>
        <flux:header sticky container class="bg-white dark:bg-zinc-800 border-b border-zinc-200 dark:border-zinc-600">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" />

            <flux:navbar class="max-lg:hidden -mb-px">
                <flux:navbar.item href="#" data-current>Dashboard</flux:navbar.item>
                <flux:navbar.item href="#" badge="32">Orders</flux:navbar.item>
                <flux:navbar.item href="#">Catalog</flux:navbar.item>
                <flux:navbar.item href="#">Configuration</flux:navbar.item>
            </flux:navbar>
        </flux:header>

        <flux:sidebar stashable
            class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <flux:navlist>
                <flux:navlist.item href="#" data-current>Dashboard</flux:navlist.item>
                <flux:navlist.item href="#" badge="32">Orders</flux:navlist.item>
                <flux:navlist.item href="#">Catalog</flux:navlist.item>
                <flux:navlist.item href="#">Configuration</flux:navlist.item>
            </flux:navlist>
        </flux:sidebar>

        <flux:main container>
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-2">
                    <div class="flex items-center gap-2">
                        <flux:select size="sm" class="">
                            <option>Last 7 days</option>
                            <option>Last 14 days</option>
                            <option selected>Last 30 days</option>
                            <option>Last 60 days</option>
                            <option>Last 90 days</option>
                        </flux:select>

                        <flux:subheading class="max-md:hidden whitespace-nowrap">compared to</flux:subheading>

                        <flux:select size="sm" class="max-md:hidden">
                            <option selected>Previous period</option>
                            <option>Same period last year</option>
                            <option>Last month</option>
                            <option>Last quarter</option>
                            <option>Last 6 months</option>
                            <option>Last 12 months</option>
                        </flux:select>
                    </div>

                    <flux:separator vertical class="max-lg:hidden mx-2 my-2" />

                    <div class="max-lg:hidden flex justify-start items-center gap-2">
                        <flux:subheading class="whitespace-nowrap">Filter by:</flux:subheading>

                        <flux:badge as="button" variant="pill" color="zinc" icon="plus" size="lg">Amount
                        </flux:badge>
                        <flux:badge as="button" variant="pill" color="zinc" icon="plus" size="lg"
                            class="max-md:hidden">Status</flux:badge>
                        <flux:badge as="button" variant="pill" color="zinc" icon="plus" size="lg">More
                            filters...</flux:badge>
                    </div>
                </div>

                
            </div>

            {{-- <div class="flex gap-6 mb-6">
                @foreach ($this->stats as $stat)
                    <div
                        class="relative flex-1 rounded-lg px-6 py-4 bg-zinc-50 dark:bg-zinc-700 {{ $loop->iteration > 1 ? 'max-md:hidden' : '' }}  {{ $loop->iteration > 3 ? 'max-lg:hidden' : '' }}">
                        <flux:subheading>{{ $stat['title'] }}</flux:subheading>

                        <flux:heading size="xl" class="mb-2">{{ $stat['value'] }}</flux:heading>

                        <div
                            class="flex items-center gap-1 font-medium text-sm @if ($stat['trendUp']) text-green-600 dark:text-green-400 @else text-red-500 dark:text-red-400 @endif">
                            <flux:icon :icon="$stat['trendUp'] ? 'arrow-trending-up' : 'arrow-trending-down'"
                                variant="micro" /> {{ $stat['trend'] }}
                        </div>

                        <div class="absolute top-0 right-0 pr-2 pt-2">
                            <flux:button icon="ellipsis-horizontal" variant="subtle" size="sm" />
                        </div>
                    </div>
                @endforeach
            </div> --}}

            {{-- <flux:table>
                <flux:table.columns>
                    <flux:table.column></flux:table.column>
                    <flux:table.column class="max-md:hidden">ID</flux:table.column>
                    <flux:table.column class="max-md:hidden">Date</flux:table.column>
                    <flux:table.column class="max-md:hidden">Status</flux:table.column>
                    <flux:table.column><span class="max-md:hidden">Customer</span>
                        <div class="md:hidden w-6"></div>
                    </flux:table.column>
                    <flux:table.column>Purchase</flux:table.column>
                    <flux:table.column>Revenue</flux:table.column>
                    <flux:table.column></flux:table.column>
                </flux:table.columns>

                <flux:table.rows>
                    @foreach ($this->rows as $row)
                        <flux:table.row>
                            <flux:table.cell class="pr-2">
                                <flux:checkbox />
                            </flux:table.cell>
                            <flux:table.cell class="max-md:hidden">#{{ $row['id'] }}</flux:table.cell>
                            <flux:table.cell class="max-md:hidden">{{ $row['date'] }}</flux:table.cell>
                            <flux:table.cell class="max-md:hidden">
                                <flux:badge :color="$row['status_color']" size="sm" inset="top bottom">
                                    {{ $row['status'] }}</flux:badge>
                            </flux:table.cell>
                            <flux:table.cell class="min-w-6">
                                <div class="flex items-center gap-2">
                                    <flux:avatar src="https://i.pravatar.cc/48?img={{ $loop->index }}"
                                        size="xs" />
                                    <span class="max-md:hidden">{{ $row['customer'] }}</span>
                                </div>
                            </flux:table.cell>
                            <flux:table.cell class="max-w-6 truncate">{{ $row['purchase'] }}</flux:table.cell>
                            <flux:table.cell class="" variant="strong">{{ $row['amount'] }}</flux:table.cell>
                            <flux:table.cell>
                                <flux:dropdown position="bottom" align="end" offset="-15">
                                    <flux:button variant="ghost" size="sm" icon="ellipsis-horizontal"
                                        inset="top bottom"></flux:button>

                                    <flux:menu>
                                        <flux:menu.item icon="document-text">View invoice</flux:menu.item>
                                        <flux:menu.item icon="receipt-refund">Refund</flux:menu.item>
                                        <flux:menu.item icon="archive-box" variant="danger">Archive</flux:menu.item>
                                    </flux:menu>
                                </flux:dropdown>
                            </flux:table.cell>
                        </flux:table.row>
                    @endforeach
                </flux:table.rows>
            </flux:table> --}}

            {{-- <flux:pagination :paginator="$this - > paginator" /> --}}
        </flux:main>
    </div>
</x-layouts.app>
