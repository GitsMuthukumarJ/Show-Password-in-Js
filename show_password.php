<div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control input-lg" type="password" name="password" id="password" placeholder="Enter your password">
                        <input type="checkbox" onclick="myFunction()"> Show Password
                    </div>

                    <script>
                        function myFunction() {
                            var x = document.getElementById("password");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
