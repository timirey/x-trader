<?php

namespace App\Modules\Trader\Facades;

use App\Modules\Trader\Contracts\TraderContract;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array acos(array $real)
 * @method static array ad(array $high, array $low, array $close, array $volume)
 * @method static array add(array $real0, array $real1)
 * @method static array adosc(array $high, array $low, array $close, array $volume, int $fastPeriod = 3, int $slowPeriod = 10)
 * @method static array adx(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array adxr(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array apo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0)
 * @method static array aroon(array $high, array $low, int $timePeriod = 14)
 * @method static array aroonosc(array $high, array $low, int $timePeriod = 14)
 * @method static array asin(array $real)
 * @method static array atan(array $real)
 * @method static array atr(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array avgprice(array $open, array $high, array $low, array $close)
 * @method static array bbands(array $real, int $timePeriod = 5, float $nbDevUp = 2.0, float $nbDevDn = 2.0, int $mAType = 0)
 * @method static array beta(array $real0, array $real1, int $timePeriod = 5)
 * @method static array bop(array $open, array $high, array $low, array $close)
 * @method static array cci(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array cdl2crows(array $open, array $high, array $low, array $close)
 * @method static array cdl3blackcrows(array $open, array $high, array $low, array $close)
 * @method static array cdl3inside(array $open, array $high, array $low, array $close)
 * @method static array cdl3linestrike(array $open, array $high, array $low, array $close)
 * @method static array cdl3outside(array $open, array $high, array $low, array $close)
 * @method static array cdl3starsinsouth(array $open, array $high, array $low, array $close)
 * @method static array cdl3whitesoldiers(array $open, array $high, array $low, array $close)
 * @method static array cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = 0.3)
 * @method static array cdladvanceblock(array $open, array $high, array $low, array $close)
 * @method static array cdlbelthold(array $open, array $high, array $low, array $close)
 * @method static array cdlbreakaway(array $open, array $high, array $low, array $close)
 * @method static array cdlclosingmarubozu(array $open, array $high, array $low, array $close)
 * @method static array cdlconcealbabyswall(array $open, array $high, array $low, array $close)
 * @method static array cdlcounterattack(array $open, array $high, array $low, array $close)
 * @method static array cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = 0.5)
 * @method static array cdldoji(array $open, array $high, array $low, array $close)
 * @method static array cdldojistar(array $open, array $high, array $low, array $close)
 * @method static array cdldragonflydoji(array $open, array $high, array $low, array $close)
 * @method static array cdlengulfing(array $open, array $high, array $low, array $close)
 * @method static array cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3)
 * @method static array cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3)
 * @method static array cdlgapsidesidewhite(array $open, array $high, array $low, array $close)
 * @method static array cdlgravestonedoji(array $open, array $high, array $low, array $close)
 * @method static array cdlhammer(array $open, array $high, array $low, array $close)
 * @method static array cdlhangingman(array $open, array $high, array $low, array $close)
 * @method static array cdlharami(array $open, array $high, array $low, array $close)
 * @method static array cdlharamicross(array $open, array $high, array $low, array $close)
 * @method static array cdlhighwave(array $open, array $high, array $low, array $close)
 * @method static array cdlhikkake(array $open, array $high, array $low, array $close)
 * @method static array cdlhikkakemod(array $open, array $high, array $low, array $close)
 * @method static array cdlhomingpigeon(array $open, array $high, array $low, array $close)
 * @method static array cdlidentical3crows(array $open, array $high, array $low, array $close)
 * @method static array cdlinneck(array $open, array $high, array $low, array $close)
 * @method static array cdlinvertedhammer(array $open, array $high, array $low, array $close)
 * @method static array cdlkicking(array $open, array $high, array $low, array $close)
 * @method static array cdlkickingbylength(array $open, array $high, array $low, array $close)
 * @method static array cdlladderbottom(array $open, array $high, array $low, array $close)
 * @method static array cdllongleggeddoji(array $open, array $high, array $low, array $close)
 * @method static array cdllongline(array $open, array $high, array $low, array $close)
 * @method static array cdlmarubozu(array $open, array $high, array $low, array $close)
 * @method static array cdlmatchinglow(array $open, array $high, $low, $close)
 * @method static array cdlmathold(array $open, array $high, array $low, array $close, float $penetration = 0.5)
 * @method static array cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3)
 * @method static array cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3)
 * @method static array cdlonneck(array $open, array $high, array $low, array $close)
 * @method static array cdlpiercing(array $open, array $high, array $low, array $close)
 * @method static array cdlrickshawman(array $open, array $high, array $low, array $close)
 * @method static array cdlrisefall3methods(array $open, array $high, array $low, array $close)
 * @method static array cdlseparatinglines(array $open, array $high, array $low, array $close)
 * @method static array cdlshootingstar(array $open, array $high, array $low, array $close)
 * @method static array cdlshortline(array $open, array $high, array $low, array $close)
 * @method static array cdlspinningtop(array $open, array $high, array $low, array $close)
 * @method static array cdlstalledpattern(array $open, array $high, array $low, array $close)
 * @method static array cdlsticksandwich(array $open, array $high, array $low, array $close)
 * @method static array cdltakuri(array $open, array $high, array $low, array $close)
 * @method static array cdltasukigap(array $open, array $high, array $low, array $close)
 * @method static array cdlthrusting(array $open, array $high, array $low, array $close)
 * @method static array cdltristar(array $open, array $high, array $low, array $close)
 * @method static array cdlunique3river(array $open, array $high, array $low, array $close)
 * @method static array cdlupsidegap2crows(array $open, array $high, array $low, array $close)
 * @method static array cdlxsidegap3methods(array $open, array $high, array $low, array $close)
 * @method static array ceil(array $real)
 * @method static array cmo(array $real, int $timePeriod = 14)
 * @method static array correl(array $real0, array $real1, int $timePeriod = 30)
 * @method static array cos(array $real)
 * @method static array cosh(array $real)
 * @method static array dema(array $real, int $timePeriod = 30)
 * @method static array div(array $real0, array $real1)
 * @method static array dx(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array ema(array $real, int $timePeriod = 30)
 * @method static int errno()
 * @method static array exp(array $real)
 * @method static array floor(array $real)
 * @method static int get_compat()
 * @method static int get_unstable_period(int $functionId)
 * @method static array ht_dcperiod(array $real)
 * @method static array ht_dcphase(array $real)
 * @method static array ht_phasor(array $open)
 * @method static array ht_sine(array $open)
 * @method static array ht_trendline(array $real)
 * @method static array ht_trendmode(array $real)
 * @method static array kama(array $real, int $timePeriod = 30)
 * @method static array linearreg_angle(array $real, int $timePeriod = 14)
 * @method static array linearreg_intercept(array $real, int $timePeriod = 14)
 * @method static array linearreg_slope(array $real, int $timePeriod = 14)
 * @method static array linearreg(array $real, int $timePeriod = 14)
 * @method static array ln(array $real)
 * @method static array log10(array $real)
 * @method static array ma(array $real, int $timePeriod = 30, int $mAType = 0)
 * @method static array macd(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $signalPeriod = 9)
 * @method static array macdext(array $real, int $fastPeriod = 12, int $fastMAType = 0, int $slowPeriod = 26, int $slowMAType = 0, int $signalPeriod = 9)
 * @method static array macdfix(array $real, int $signalPeriod = 9)
 * @method static array mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05)
 * @method static array mavp(array $real, array $periods, int $minPeriod = 2, int $maxPeriod = 30, int $mAType = 0)
 * @method static array max(array $real, int $timePeriod = 30)
 * @method static array maxindex(array $real, int $timePeriod = 30)
 * @method static array medprice(array $high, array $low)
 * @method static array mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14)
 * @method static array midpoint(array $real, int $timePeriod = 14)
 * @method static array midprice(array $high, array $low, int $timePeriod = 14)
 * @method static array min(array $real, int $timePeriod = 30)
 * @method static array minindex(array $real, int $timePeriod = 30)
 * @method static array minmax(array $real, int $timePeriod = 30)
 * @method static array minmaxindex(array $real, int $timePeriod = 30)
 * @method static array minus_di(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array minus_dm(array $high, array $low, int $timePeriod = 14)
 * @method static array mom(array $real, int $timePeriod = 10)
 * @method static array mult(array $real0, array $real1)
 * @method static array natr(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array obv(array $real, array $volume)
 * @method static array plus_di(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array plus_dm(array $high, array $low, int $timePeriod = 14)
 * @method static array ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0)
 * @method static array roc(array $real, int $timePeriod = 10)
 * @method static array rocp(array $real, int $timePeriod = 10)
 * @method static array rocr100(array $real, int $timePeriod = 10)
 * @method static array rocr(array $real, int $timePeriod = 10)
 * @method static array rsi(array $real, int $timePeriod = 14)
 * @method static array sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2)
 * @method static array sarext(array $high, array $low, float $startValue = 0.0, float $offsetOnReverse = 0.0, float $accelerationInitLong = 0.02, float $accelerationLong = 0.02, float $accelerationMaxLong = 0.2, float $accelerationInitShort = 0.02, float $accelerationShort = 0.02, float $accelerationMaxShort = 0.2)
 * @method static void set_compat(int $compatId)
 * @method static void set_unstable_period(int $functionId, int $timePeriod)
 * @method static array sin(array $real)
 * @method static array sinh(array $real)
 * @method static array sma(array $real, int $timePeriod = 30)
 * @method static array sqrt(array $real)
 * @method static array stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0)
 * @method static array stoch(array $high, array $low, array $close, int $fastK_Period = 5, int $slowK_Period = 3, int $slowK_MAType = 0, int $slowD_Period = 3, int $slowD_MAType = 0)
 * @method static array stochf(array $high, array $low, array $close, int $fastK_Period = 5, int $fastD_Period = 3, int $fastD_MAType = 0)
 * @method static array stochrsi(array $real, int $timePeriod = 14, int $fastK_Period = 5, int $fastD_Period = 3, int $fastD_MAType = 0)
 * @method static array sub(array $real0, array $real1)
 * @method static array sum(array $real, int $timePeriod = 30)
 * @method static array t3(array $real, int $timePeriod = 5, float $vFactor = 0.7)
 * @method static array tan(array $real)
 * @method static array tanh(array $real)
 * @method static array tema(array $real, int $timePeriod = 30)
 * @method static array trange(array $high, array $low, array $close)
 * @method static array trima(array $real, int $timePeriod = 30)
 * @method static array trix(array $real, int $timePeriod = 30)
 * @method static array tsf(array $real, int $timePeriod = 14)
 * @method static array typprice(array $high, array $low, array $close)
 * @method static array ultosc(array $high, array $low, array $close, int $timePeriod1 = 7, int $timePeriod2 = 14, int $timePeriod3 = 28)
 * @method static array var(array $real, int $timePeriod = 5, float $nbDev = 1.0)
 * @method static array wclprice(array $high, array $low, array $close)
 * @method static array willr(array $high, array $low, array $close, int $timePeriod = 14)
 * @method static array wma(array $real, int $timePeriod = 30)
 */
class Trader extends Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor(): string
    {
        return TraderContract::class;
    }
}
