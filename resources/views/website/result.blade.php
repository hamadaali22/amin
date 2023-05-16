 @if(isset($success))
                                   <div class="alert alert-success text-center">
                                          تم الدفع بنجاح
                                   </div>
                                @endif
                                @if(isset($fail))
                                    <div class="alert alert-danger text-center">
                                        فشلت عملية الدفع
                                    </div>
                                @endif