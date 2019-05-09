@component('layouts.back')

@component('components.layout.sectionWhite', [
'intro' => __('Overview'),
'introBold' => __('Order'),
'linkTitle' => __('Order'),
'linkIcon' => 'icons.package',
])

<div class="mb-8">
    <div class="lg:flex -m-4">
        <div class="w-full lg:w-1/2 p-4">
            <div class="uppercase font-bold mb-2">{{ __('Order details') }}</div>
            <div class="mb-4">
                <div>{{ __('Order number') }}</div>
                <div>1234</div>
            </div>
            <div class="mb-4">
                <div>{{ __('Date') }}</div>
                <div>2018-10-29 10:41 (6 maanden geleden)</div>
            </div>
            <div class="mb-4">
                <div>{{ __('Store') }}</div>
                <div>Test</div>
            </div>
            <div class="mb-4">
                <div>{{ __('Status') }}</div>
                <div>
                    @component('components.layout.orderStatusBadge')@endcomponent
                </div>
            </div>
        </div>
        <div class="w-full lg:w-1/2 p-4">
            <div class="uppercase font-bold mb-2">{{ __('Personal details') }}</div>
            <div class="mb-4">
                <div>{{ __('Name') }}</div>
                <div>Jorg Aldenhuijsen</div>
            </div>
            <div class="mb-4">
                <div>{{ __('E-mail address') }}</div>
                <div>jorg@qbixx.nl</div>
            </div>
            <div class="mb-4">
                <div>{{ __('Phone number') }}</div>
                <div>-</div>
            </div>
            <div class="mb-4">
                <div>{{ __('Address') }}</div>
                <div>
                    [Name]<br>
                    [Street]<br>
                    [zip] [city]<br>
                    [country]
                </div>
            </div>
        </div>
    </div>
</div>

<div class="hidden sm:flex sm:flex-row sm:items-center border-b font-bold py-2">
    <div class="w-1/2 text-sm text-slate">
        {{ __('Item') }}
    </div>
    <div class="w-1/6 text-right text-sm text-slate">
        {{ __('Price') }}
    </div>
    <div class="w-1/6 text-center text-sm text-slate">
        {{ __('Number') }}
    </div>
    <div class="w-1/6 text-right text-sm text-slate">
        {{ __('Total') }}
    </div>
</div>

@component('components.layout.orderDetailItem', [
'title' => 'Product 55',
'price' => '8,00',
'amount' => '1',
'total' => '8,00'])

<img srcset="https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_800_450.jpeg 800w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_669_376.jpeg 669w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_560_315.jpeg 560w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_468_263.jpeg 468w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_391_219.jpeg 391w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_327_183.jpeg 327w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_274_154.jpeg 274w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_229_128.jpeg 229w, https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/responsive/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB___medialibrary_original_192_108.jpeg 192w, data:image/svg+xml;base64,PCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHg9IjAiCiB5PSIwIiB2aWV3Qm94PSIwIDAgODAwIDQ1MCI+Cgk8aW1hZ2Ugd2lkdGg9IjgwMCIgaGVpZ2h0PSI0NTAiIHhsaW5rOmhyZWY9ImRhdGE6aW1hZ2UvanBlZztiYXNlNjQsLzlqLzRBQVFTa1pKUmdBQkFRRUFZQUJnQUFELy9nQTdRMUpGUVZSUFVqb2daMlF0YW5CbFp5QjJNUzR3SUNoMWMybHVaeUJKU2tjZ1NsQkZSeUIyT0RBcExDQnhkV0ZzYVhSNUlEMGdPVEFLLzlzQVF3QURBZ0lEQWdJREF3TURCQU1EQkFVSUJRVUVCQVVLQndjR0NBd0tEQXdMQ2dzTERRNFNFQTBPRVE0TEN4QVdFQkVURkJVVkZRd1BGeGdXRkJnU0ZCVVUvOXNBUXdFREJBUUZCQVVKQlFVSkZBMExEUlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVUZCUVVGQlFVRkJRVS84QUFFUWdBRWdBZ0F3RVJBQUlSQVFNUkFmL0VBQjhBQUFFRkFRRUJBUUVCQUFBQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVFBQUlCQXdNQ0JBTUZCUVFFQUFBQmZRRUNBd0FFRVFVU0lURkJCaE5SWVFjaWNSUXlnWkdoQ0NOQ3NjRVZVdEh3SkROaWNvSUpDaFlYR0JrYUpTWW5LQ2txTkRVMk56ZzVPa05FUlVaSFNFbEtVMVJWVmxkWVdWcGpaR1ZtWjJocGFuTjBkWFozZUhsNmc0U0Zob2VJaVlxU2s1U1ZscGVZbVpxaW82U2xwcWVvcWFxeXM3UzF0cmU0dWJyQ3c4VEZ4c2ZJeWNyUzA5VFYxdGZZMmRyaDR1UGs1ZWJuNk9ucThmTHo5UFgyOS9qNSt2L0VBQjhCQUFNQkFRRUJBUUVCQVFFQUFBQUFBQUFCQWdNRUJRWUhDQWtLQy8vRUFMVVJBQUlCQWdRRUF3UUhCUVFFQUFFQ2R3QUJBZ01SQkFVaE1RWVNRVkVIWVhFVElqS0JDQlJDa2FHeHdRa2pNMUx3RldKeTBRb1dKRFRoSmZFWEdCa2FKaWNvS1NvMU5qYzRPVHBEUkVWR1IwaEpTbE5VVlZaWFdGbGFZMlJsWm1kb2FXcHpkSFYyZDNoNWVvS0RoSVdHaDRpSmlwS1RsSldXbDVpWm1xS2pwS1dtcDZpcHFyS3p0TFcydDdpNXVzTER4TVhHeDhqSnl0TFQxTlhXMTlqWjJ1TGo1T1htNStqcDZ2THo5UFgyOS9qNSt2L2FBQXdEQVFBQ0VRTVJBRDhBb2VKTkViemtBQndUVTNDeDBmaHJ3Mys5ajRQU3B1Tkc5ZCtGbTgxM0E0eFR1QnlrM2h1UmJzc0FldFdnU1BZUEhmd3hGbGRXMnhOeXN3SEFxTEN2YzYzd1Q4S1B0TGtNdTA3ZU0wckR1Yjgzd25sQmxUSFFVeFhPZlg0UFBJM0k3ODFTSGM3alhrVnpiYmxEZk1Pb3FHWm5iZUYwVlhHQUI4bzZDbVdiMXlvdzNBNlVFc3hBb0FiZ2Rhc0QvOWs9Ij4KCTwvaW1hZ2U+Cjwvc3ZnPg== 32w" onload="this.onload=null;this.sizes=Math.ceil(this.getBoundingClientRect().width/window.innerWidth*100)+'vw';" sizes="5vw" src="https://smartvitaal-staging.s3.amazonaws.com/media/c74d97b01eae257e44aa9d5bade97baf/8uMyqcWlglFLiEtAQWdUIV1nnwubQ9EuMIKAJ7YB.jpeg" width="800">

@endcomponent

<div class="flex mt-6 sm:-mx-8 sm:px-8 font-bold">
    <div class="w-1/3 sm:w-3/4 sm:text-right">
        {{ __('Total') }} </div>
    <div class="w-2/3 sm:w-1/4 text-right font-bold">
        &euro;&nbsp;8
    </div>
</div>

<div class="flex mt-2 sm:-mx-8 sm:px-8 mb-8">
    <div class="w-1/3 sm:w-3/4 sm:text-right">
        iDEAL
    </div>
    <div class="w-2/3 sm:w-1/4 text-right">
        -&nbsp;&euro;&nbsp;8
    </div>
</div>

@endcomponent

@endcomponent