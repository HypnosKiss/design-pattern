## 策略模式（Strategy Pattern）
    分析与思考： 策略模式定义了一系列算法，并将每一个算法封装起来，使它们可以互换。
    策略模式使得算法的变化独立于使用算法的客户。当需要根据平台执行不同的逻辑时，可以将每种平台的逻辑封装为一个策略，然后在运行时根据平台选择相应的策略。

### 策略模式
    定义：定义一系列算法，将每一个算法封装起来，并使它们可以互换。
    适用场景：当需要根据不同平台执行不同逻辑时，策略模式可以很好地实现这种需求。
    
    优点：
    
    算法可以自由切换。
    扩展性好，增加新的平台逻辑时不需要修改现有代码。
    
    缺点：
    客户端必须知道所有的策略类，并自行决定使用哪一个策略。