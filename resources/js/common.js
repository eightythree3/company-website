export default {
  

    methods:{ 
        AxiosRequest(method , url , dataObj=null , config=null){
            try{
                return  axios({
                    method: method, 
                    url: url,
                    data: dataObj,
                    config:config
                  });
            }catch(error){
                alert("error");
            }
          
        }

        
    }
}