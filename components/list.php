<div class="w-75">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="income-tab" data-bs-toggle="tab" data-bs-target="#income" type="button" role="tab" aria-controls="income" aria-selected="true">Income</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="expense-tab" data-bs-toggle="tab" data-bs-target="#expense" type="button" role="tab" aria-controls="expense" aria-selected="false">Expense</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active p-2" id="income" role="tabpanel" aria-labelledby="income-tab">
            <table class="table table-success table-striped">
                <tr>
                    <th width="10%">No</th>
                    <th width="30%">Items</th>
                    <th width="30%">Amount</th>
                    <th width="30%">Action</th>
                </tr>
            </table>
        </div>
        <div class="tab-pane fade p-2" id="expense" role="tabpanel" aria-labelledby="expense-tab">
            <table class="table table-danger table-striped">
                <tr>
                    <th width="10%">No</th>
                    <th width="30%">Items</th>
                    <th width="30%">Amount</th>
                    <th width="30%">Action</th>
                </tr>
            </table>
        </div>
    </div>
</div>