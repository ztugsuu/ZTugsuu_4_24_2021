<form action="index.php" method="POST">
                    <h2>Calculator</h2>
                    <div class="row">
                        <div class="col-2">
                            <input name="nomer1" type="number" placeholder="#1" required />
                        </div>
                        <div class="col-1">
                            <select required name="uildel" class="form-select" aria-label="Uildel">
                                <option selected></option>
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <input name="nomer2" type="number" placeholder="#2" required />
                        </div>
                        <div class="col-1">
                            <h1 style="font-weight: bold;  ">=</h1>
                        </div>
                        <div class="col-2">
                            <h1> <?php echo $hariu  ?> </h1>
                        </div>
                        <button type="submit">Bodoh</button>
                    </div>
                </form>