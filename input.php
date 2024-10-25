<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Medicare & Medicaid ABN Forms</title>
        <link rel="stylesheet" type="text/css" href="/css/foundation/foundation.css">
        <link rel="stylesheet" type="text/css" href="/css/foundation/app.css">
    </head>
    <body>
        <div class="grid-container">
            <div class="callout secondary">
                <div class="grid-x grid-padding-x">
                    <div class="cell">
                        <img class="float-right" src="/images/lol-logo.png" alt="Logo">
                        <h1>Medicare & Medicaid ABN Forms</h1>
                        <p>Create PDF file for ABN Forms.</p>
                    </div>
                </div>
            </div>
            <form data-abide novalidate action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="grid-x align-center">
                    <div class="cell">
                        <div data-abide-error class="alert callout" style="display: none;">
                            <p><i class="fi-alert"></i> There are some errors...</p>
                        </div>
                    </div>
                    <div class="cell small-3">
                        <label for="whichform">Medicare or Medicaid form?</label>
                        <select id="whichform" name="whichform">
                            <option value="medicaid">Medicaid</option>
                            <option value="medicare">Medicare</option>
                        </select>
                    </div>
                    <div class="cell small-6"></div>
                    <div class="cell"></div>
                    <div class="cell small-3">
                        <label for="ptname">B. Patient Name</label>
                        <input type="text" id="ptname" name="ptname" placeholder="Last, First M" aria-describedby="ptName" required>
                        <span class="form-error">Patient Name is required.</span>
                    </div>
                    <div class="cell small-3">
                        <label for="ptname">B. Patient Date of Birth</label>
                        <input type="date" id="ptdob" name="ptdob" placeholder="Date of Birth" aria-describedby="ptDOB" required>
                        <span class="form-error">Patient Name is required.</span>
                    </div>
                    <div class="cell small-3">
                        <label for="ptid">C. Identification</label>
                        <input type="text" id="ptid" name="ptid" placeholder="Medicare or Medicaid ID" aria-describedby="ptId" required>
                        <span class="form-error">Identification is required.</span>
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <label for="d1">D. Item(s)</label>
                        <input type="text" id="d1" name="d1" maxlength="32" placeholder="CPT/HCPCS Description" aria-describedby="d1" required>
                        <span class="form-error">At least one item is required.</span>
                    </div>
                    <div class="class small-3">
                        <label for="e1">E. Reason for possible non-payment</label>
                        <input type="text" id="e1" name="e1" maxlength="32" placeholder="Reason for possible non-coverage" aria-describedby="e1" required>
                        <span class="form-error">At least one item is required.</span>
                    </div>
                    <div class="class small-3">
                        <label for="f1">F.  Item cost</label>
                        <input type="number" id="f1" name="f1" step="0.01" max="9999.99" placeholder="Item cost" aria-describedby="d1" required onchange="updateTotal()">
                        <span class="form-error">At least one item is required.</span>
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d2" name="d2" maxlength="32" placeholder="CPT/HCPCS Description">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e2" name="e2" maxlength="32" placeholder="Reason for possible non-coverage">
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f2" name="f2" step="0.01" max="9999.99" placeholder="Item cost" onchange="updateTotal()">
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d3" name="d3" maxlength="32" placeholder="CPT/HCPCS Description">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e3" name="e3" maxlength="32" placeholder="Reason for possible non-coverage">
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f3" name="f3" step="0.01" max="9999.99" placeholder="Item cost" onchange="updateTotal()">
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d4" name="d4" maxlength="32" placeholder="CPT/HCPCS Description">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e4" name="e4" maxlength="32" placeholder="Reason for possible non-coverage">
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f4" name="f4" step="0.01" max="9999.99" placeholder="Item cost" onchange="updateTotal()">
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d5" name="d5" maxlength="32" placeholder="CPT/HCPCS Description">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e5" name="e5" maxlength="32" placeholder="Reason for possible non-coverage">
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f5" name="f5" step="0.01" max="9999.99" placeholder="Item cost" onchange="updateTotal()">
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d6" name="d6" maxlength="32" placeholder="CPT/HCPCS Description">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e6" name="e6" maxlength="32" placeholder="Reason for possible non-coverage">
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f6" name="f6" step="0.01" max="9999.99" placeholder="Item cost" onchange="updateTotal()">
                    </div>
                    <div class="cell"></div>

                    <div class="class small-3">
                        <input type="text" id="d7" name="d7" maxlength="32" placeholder="CPT/HCPCS Description" readonly value="Total:">
                    </div>
                    <div class="class small-3">
                        <input type="text" id="e7" name="e7" maxlength="32" readonly>
                    </div>
                    <div class="class small-3">
                        <input type="number" id="f7" name="f7" maxlength="32" readonly value="0.00">
                    </div>
                    <div class="cell"></div>

                    <div class="cell small-5"></div>
                        <div class="button-group hollow">
                            <button class="button secondary" type="reset" value="Reset">Reset</button>
                            <input type="submit" class="button primary" value="Create Form">
                        </div>
                    </div>
                    <div class="cell"></div>
                </div>
            </form>
        </div>

        <script src="/js/foundation/vendor/jquery.js"></script>
        <script src="/js/foundation/vendor/what-input.js"></script>
        <script src="/js/foundation/vendor/foundation.js"></script>
        <script src="/js/foundation/app.js"></script>
        <script>
            var tot = 0.0;
            var f1 = document.getElementById("f1");
            var f2 = document.getElementById("f2");
            var f3 = document.getElementById("f3");
            var f4 = document.getElementById("f4");
            var f5 = document.getElementById("f5");
            var f6 = document.getElementById("f6");
            var f7 = document.getElementById("f7");
            function updateTotal() {
                tot = Number(f1.value) + Number(f2.value) + Number(f3.value) + Number(f4.value) + Number(f5.value) + Number(f6.value);
                f7.value = tot.toLocaleString(undefined, { minimumFractionDigits: 2});
                f1.value = Number(f1.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                if (f2.value != "") {
                    f2.value = Number(f2.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                }
                if (f3.value != "") {
                    f3.value = Number(f3.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                }
                if (f4.value != "") {
                    f4.value = Number(f4.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                }
                if (f5.value != "") {
                    f5.value = Number(f5.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                }
                if (f6.value != "") {
                    f6.value = Number(f6.value).toLocaleString(undefined, { minimumFractionDigits: 2});
                }
            }
        </script>
    </body>
</html>
