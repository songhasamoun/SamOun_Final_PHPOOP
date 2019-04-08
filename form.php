<div class="container-fluit">
    <h1 class="text text-light text-center">WEP CALCULATOR</h1>
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="cal.php" class="mt-4 form p-3 text-light" method="POST">
                <div class="form-group">
                    <label for="fnum">First Number:</label>
                    <input type="text" name="fnum" id="fnum" class="form-control" require oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
                <div class="form-group">
                    <label for="operator">Select Operator:</label>
                    <select name="operator" class="form-control" id="operator">
                        <option value="">None</option>
                        <option value="+">Add</option>
                        <option value="-">Minus</option>
                        <option value="*">Multiply</option>
                        <option value="/">Devide</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="snum">Second Number:</label>
                    <input type="text" name="snum" id="snum" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                </div>
                <div class="form-group">
                    <button class="btn btn-success" name="btn-add" type="submit">Calculate</button>
                </div>
            </form>
                <div class="form-group">
                    <label class="text-light pb-3 pl-4">The result is: 0</label>
                </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>