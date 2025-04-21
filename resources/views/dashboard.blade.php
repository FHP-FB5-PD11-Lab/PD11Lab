<x-layouts.app :title="__('Dashboard')">
    <div class="d-flex flex-column flex-grow-1 w-100 h-100 gap-3">

        {{-- obere 3 Platzhalter --}}
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                <div
                  class="ratio ratio-16x9 position-relative overflow-hidden border"
                  style="border-color: #e5e5e5; border-radius: .75rem;"
                >
                  <x-placeholder-pattern
                    class="position-absolute top-0 start-0 w-100 h-100"
                    style="stroke: rgba(26,26,0,0.2);"
                  />
                </div>
            </div>
            <div class="col">
                <div
                  class="ratio ratio-16x9 position-relative overflow-hidden border"
                  style="border-color: #e5e5e5; border-radius: .75rem;"
                >
                  <x-placeholder-pattern
                    class="position-absolute top-0 start-0 w-100 h-100"
                    style="stroke: rgba(26,26,0,0.2);"
                  />
                </div>
            </div>
            <div class="col">
                <div
                  class="ratio ratio-16x9 position-relative overflow-hidden border"
                  style="border-color: #e5e5e5; border-radius: .75rem;"
                >
                  <x-placeholder-pattern
                    class="position-absolute top-0 start-0 w-100 h-100"
                    style="stroke: rgba(26,26,0,0.2);"
                  />
                </div>
            </div>
        </div>

        {{-- großer Platzhalter, füllt den Rest --}}
        <div
          class="position-relative overflow-hidden border flex-grow-1 w-100"
          style="border-color: #e5e5e5; border-radius: .75rem;"
        >
            <x-placeholder-pattern
              class="position-absolute top-0 start-0 w-100 h-100"
              style="stroke: rgba(26,26,0,0.2);"
            />
        </div>

    </div>
</x-layouts.app>
